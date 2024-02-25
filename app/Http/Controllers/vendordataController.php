<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevendordataRequest;
use App\Http\Requests\UpdatevendordataRequest;
use App\Repositories\vendordataRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\productservices;
use App\Exports\VendordataExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\vendordata;

use Flash;
use Response;

class vendordataController extends AppBaseController
{
    /** @var vendordataRepository $vendordataRepository*/
    private $vendordataRepository;

    public function __construct(vendordataRepository $vendordataRepo)
    {
        $this->vendordataRepository = $vendordataRepo;
    }

    /**
     * Display a listing of the vendordata.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $vendordatas = $this->vendordataRepository->all();
        $vendordatas = vendordata::paginate(5); // Paginate the results, 10 items per page

        return view('vendordatas.index')
            ->with('vendordatas', $vendordatas);
    }

    /**
     * Show the form for creating a new vendordata.
     *
     * @return Response
     */
    public function create()
    {
        $prod = productservices::all();

        return view('vendordatas.create',compact('prod'));
    }

    /**
     * Store a newly created vendordata in storage.
     *
     * @param CreatevendordataRequest $request
     *
     * @return Response
     */
    public function store(CreatevendordataRequest $request)
    {
        $input = $request->all();

        $vendordata = $this->vendordataRepository->create($input);

        Flash::success('Vendordata saved successfully.');

        return redirect(route('vendordatas.index'));
    }

    /**
     * Display the specified vendordata.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vendordata = $this->vendordataRepository->find($id);

        if (empty($vendordata)) {
            Flash::error('Vendordata not found');

            return redirect(route('vendordatas.index'));
        }

        return view('vendordatas.show')->with('vendordata', $vendordata);
    }

    /**
     * Show the form for editing the specified vendordata.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vendordata = $this->vendordataRepository->find($id);

        if (empty($vendordata)) {
            Flash::error('Vendordata not found');

            return redirect(route('vendordatas.index'));
        }

        $prod = productservices::all();

        return view('vendordatas.edit',compact('prod'))->with('vendordata', $vendordata);
    }

    /**
     * Update the specified vendordata in storage.
     *
     * @param int $id
     * @param UpdatevendordataRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevendordataRequest $request)
    {
        $vendordata = $this->vendordataRepository->find($id);

        if (empty($vendordata)) {
            Flash::error('Vendordata not found');

            return redirect(route('vendordatas.index'));
        }

        $vendordata = $this->vendordataRepository->update($request->all(), $id);

        Flash::success('Vendordata updated successfully.');

        return redirect(route('vendordatas.index'));
    }

    /**
     * Remove the specified vendordata from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vendordata = $this->vendordataRepository->find($id);

        if (empty($vendordata)) {
            Flash::error('Vendordata not found');

            return redirect(route('vendordatas.index'));
        }

        $this->vendordataRepository->delete($id);

        Flash::success('Vendordata deleted successfully.');

        return redirect(route('vendordatas.index'));
    }
    public function export(Request $request)
{
    // Fetch any search criteria from the request if needed
    $searchCriteria = $request->all();

    // Trigger the export using the VendordataExport class
    return Excel::download(new VendordataExport($searchCriteria), 'vendordata.xlsx');
}
}
