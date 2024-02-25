<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException; // Import QueryException

use App\Http\Requests\CreateproductservicesRequest;
use App\Http\Requests\UpdateproductservicesRequest;
use App\Repositories\productservicesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\productservices;
use App\Models\clients;
use App\Models\vendors;
class productservicesController extends AppBaseController
{
    /** @var productservicesRepository $productservicesRepository*/
    private $productservicesRepository;

    public function __construct(productservicesRepository $productservicesRepo)
    {
        $this->productservicesRepository = $productservicesRepo;
    }

    /**
     * Display a listing of the productservices.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productservices = $this->productservicesRepository->all();
        $productservices = productservices::paginate(10); // Assuming you want 10 items per page

        return view('productservices.index')
            ->with('productservices', $productservices);
    }

    /**
     * Show the form for creating a new productservices.
     *
     * @return Response
     */
    public function create()
    {
        $clients = clients::all(); // Adjusted model name
        $venders = vendors::all(); // Adjusted model name

        return view('productservices.create' ,compact('clients','venders'));
    }

    /**
     * Store a newly created productservices in storage.
     *
     * @param CreateproductservicesRequest $request
     *
     * @return Response
     */
    public function store(CreateproductservicesRequest $request)
    {
        $input = $request->all();

        $productservices = $this->productservicesRepository->create($input);

        Flash::success('Productservices saved successfully.');

        return redirect(route('productservices.index'));
    }

    /**
     * Display the specified productservices.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productservices = $this->productservicesRepository->find($id);

        if (empty($productservices)) {
            Flash::error('Productservices not found');

            return redirect(route('productservices.index'));
        }

        return view('productservices.show')->with('productservices', $productservices);
    }

    /**
     * Show the form for editing the specified productservices.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productservices = $this->productservicesRepository->find($id);

        if (empty($productservices)) {
            Flash::error('Productservices not found');

            return redirect(route('productservices.index'));
        }
 
        $clients = clients::all(); // Add this line to retrieve clients
        $venders = vendors::all(); // Adjusted model name

    
        return view('productservices.edit' ,compact( 'clients', 'venders'))->with('productservices', $productservices);
    }

    /**
     * Update the specified productservices in storage.
     *
     * @param int $id
     * @param UpdateproductservicesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductservicesRequest $request)
    {
        $productservices = $this->productservicesRepository->find($id);

        if (empty($productservices)) {
            Flash::error('Productservices not found');

            return redirect(route('productservices.index'));
        }

        $productservices = $this->productservicesRepository->update($request->all(), $id);

        Flash::success('Productservices updated successfully.');

        return redirect(route('productservices.index'));
    }

    /**
     * Remove the specified productservices from storage.
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
            $productservices = $this->productservicesRepository->find($id);
    
            if (empty($productservices)) {
                Flash::error('Productservices not found');
                return redirect(route('productservices.index'));
            }
    
            $this->productservicesRepository->delete($id);
    
            Flash::success('Productservices deleted successfully.');
        } catch (QueryException $e) {
            Flash::error('Cannot delete productservices. This productservices is associated with other data.');
        }
    
        return redirect(route('productservices.index'));
    }
}
