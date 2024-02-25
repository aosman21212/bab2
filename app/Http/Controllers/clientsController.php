<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclientsRequest;
use App\Http\Requests\UpdateclientsRequest;
use App\Models\babacctmanagers;
use App\Models\clients;

use App\Repositories\clientsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException; // Import QueryException

class clientsController extends AppBaseController
{
    /** @var clientsRepository $clientsRepository */
    private $clientsRepository;

    public function __construct(clientsRepository $clientsRepo)
    {
        $this->clientsRepository = $clientsRepo;
    }

    /**
     * Display a listing of the clients.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $clients = $this->clientsRepository->paginate(2);
        $totalClients = clients::count(); // Fetch total count of clients from the database
    
        return view('clients.index')
            ->with('clients', $clients)
            ->with('totalClients', $totalClients); // Pass total count to the view
    }
    
    /**
     * Show the form for creating a new clients.
     *
     * @return Response
     */
    public function create()
    {
        $babacctmanagers = babacctmanagers::all();
        return view('clients.create', compact('babacctmanagers'));
    }

    /**
     * Store a newly created clients in storage.
     *
     * @param CreateclientsRequest $request
     *
     * @return Response
     */
    public function store(CreateclientsRequest $request)
    {
        $input = $request->all();

        // Handle file upload
        if ($request->hasFile('clientLogo')) {
            $imagePath = $request->file('clientLogo')->store('clientLogos', 'public');
            $input['clientLogo'] = $imagePath;
        }

        $clients = $this->clientsRepository->create($input);

        Flash::success('Clients saved successfully.');

        return redirect(route('clients.index'));
    }

    /**
     * Display the specified clients.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clients = $this->clientsRepository->find($id);

        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        return view('clients.show')->with('clients', $clients);
    }

    /**
     * Show the form for editing the specified clients.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clients = $this->clientsRepository->find($id);

        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        $babacctmanagers = babacctmanagers::all();

        return view('clients.edit', compact('babacctmanagers'))->with('clients', $clients);
    }

    /**
     * Update the specified clients in storage.
     *
     * @param int $id
     * @param UpdateclientsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclientsRequest $request)
    {
        $clients = $this->clientsRepository->find($id);

        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        $input = $request->all();

        // Handle file upload
        if ($request->hasFile('clientLogo')) {
            // Delete old file if it exists
            Storage::disk('public')->delete($clients->clientLogo);

            $imagePath = $request->file('clientLogo')->store('clientLogos', 'public');
            $input['clientLogo'] = $imagePath;
        }

        $clients = $this->clientsRepository->update($input, $id);

        Flash::success('Clients updated successfully.');

        return redirect(route('clients.index'));
    }

    /**
     * Remove the specified clients from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
   
    public function destroy($id)
    {
        try {
            $clients = $this->clientsRepository->find($id);

            if (empty($clients)) {
                Flash::error('Clients not found');
                return redirect(route('clients.index'));
            }

            // Delete associated file
            if ($clients->clientLogo) {
                Storage::disk('public')->delete($clients->clientLogo);
            }

            $this->clientsRepository->delete($id);

            Flash::success('Clients deleted successfully.');
        } catch (QueryException $e) {
            Flash::error('Cannot delete client. This client is associated with other data.');
        }

        return redirect(route('clients.index'));
    }
}
