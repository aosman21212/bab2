<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclientdataRequest;
use App\Http\Requests\UpdateclientdataRequest;
use App\Models\clientdata;
use App\Repositories\clientdataRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\clients;
use App\Models\productservices;
use Flash;
use Response;

class clientdataController extends AppBaseController
{
    /** @var clientdataRepository $clientdataRepository*/
    private $clientdataRepository;

    public function __construct(clientdataRepository $clientdataRepo)
    {
        $this->clientdataRepository = $clientdataRepo;
    }

    /**
     * Display a listing of the clientdata.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $clientdatas = $this->clientdataRepository->all();

        $clientdatas = clientdata::paginate(8); // Paginate the results, 10 items per page

        return view('clientdatas.index')
            ->with('clientdatas', $clientdatas);
    }

    /**
     * Show the form for creating a new clientdata.
     *
     * @return Response
     */
  
     public function create()
     {
         $clients = clients::all();
         $prod = productservices::all();
     
         // Fetch a specific productservice or the first one, depending on your requirements
         $productService = productservices::first(); // You can modify this to fit your logic
     
         // Pass productServiceId to the view
         $productServiceId = $productService->id ?? null;
     
         // Fetch product services based on the first client initially
         $productServices = productservices::where('clientid', $clients->first()->id ?? null)->pluck('productServiceName', 'id');
 
         // Pass productServices to the view
         return view('clientdatas.create', compact('clients', 'prod', 'productServiceId', 'productServices'));
     }

    /**
     * Store a newly created clientdata in storage.
     *
     * @param CreateclientdataRequest $request
     *
     * @return Response
     */
    public function store(CreateclientdataRequest $request)
    {
        $input = $request->all();

        $clientdata = $this->clientdataRepository->create($input);

        Flash::success('Clientdata saved successfully.');

        return redirect(route('clientdatas.index'));
    }

    /**
     * Display the specified clientdata.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clientdata = $this->clientdataRepository->find($id);

        if (empty($clientdata)) {
            Flash::error('Clientdata not found');

            return redirect(route('clientdatas.index'));
        }

        return view('clientdatas.show')->with('clientdata', $clientdata);
    }

    /**
     * Show the form for editing the specified clientdata.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clientdata = $this->clientdataRepository->find($id);

        if (empty($clientdata)) {
            Flash::error('Clientdata not found');

            return redirect(route('clientdatas.index'));
        }

        $clients = clients::all();
        $prod = productservices::all();
    
        return view('clientdatas.edit', compact('clientdata', 'clients', 'prod'));
    }

    /**
     * Update the specified clientdata in storage.
     *
     * @param int $id
     * @param UpdateclientdataRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclientdataRequest $request)
    {
        $clientdata = $this->clientdataRepository->find($id);

        if (empty($clientdata)) {
            Flash::error('Clientdata not found');

            return redirect(route('clientdatas.index'));
        }

        $clientdata = $this->clientdataRepository->update($request->all(), $id);

        Flash::success('Clientdata updated successfully.');

        return redirect(route('clientdatas.index'));
    }

    /**
     * Remove the specified clientdata from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clientdata = $this->clientdataRepository->find($id);

        if (empty($clientdata)) {
            Flash::error('Clientdata not found');

            return redirect(route('clientdatas.index'));
        }

        $this->clientdataRepository->delete($id);

        Flash::success('Clientdata deleted successfully.');

        return redirect(route('clientdatas.index'));
    }
    public function fetchProductServices(Request $request)
    {
        $clientId = $request->input('clientId');

        // Fetch product services based on the selected client
        $productServices = productservices::where('clientid', $clientId)->pluck('productServiceName', 'id');

        // You can return the options as JSON
        return Response::json($productServices);
    }
}

