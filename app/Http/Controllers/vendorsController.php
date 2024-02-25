<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevendorsRequest;
use App\Http\Requests\UpdatevendorsRequest;
use App\Models\vendors;
use App\Repositories\vendorsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Storage;

class vendorsController extends AppBaseController
{
    /** @var vendorsRepository $vendorsRepository*/
    private $vendorsRepository;

    public function __construct(vendorsRepository $vendorsRepo)
    {
        $this->vendorsRepository = $vendorsRepo;
    }

    /**
     * Display a listing of the vendors.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $vendors = $this->vendorsRepository->all();
        $vendors = vendors::paginate(5); // Paginate the results, 10 items per page

        // Eager load the 'addedby' relationship
        $vendors->load('addedby');
    
        return view('vendors.index')->with('vendors', $vendors);
    }
    

    /**
     * Show the form for creating a new vendors.
     *
     * @return Response
     */
    public function create()
    {
        return view('vendors.create');
    }

    /**
     * Store a newly created vendors in storage.
     *
     * @param CreatevendorsRequest $request
     *
     * @return Response
     */
    public function store(CreatevendorsRequest $request)
    {
        $input = $request->all();

        // Handle file upload
        if ($request->hasFile('vendorLogo')) {
            $imagePath = $request->file('vendorLogo')->store('vendor_logos', 'public');
            $input['vendorLogo'] = $imagePath;
        }

        $vendors = $this->vendorsRepository->create($input);

        Flash::success('Vendors saved successfully.');

        return redirect(route('vendors.index'));
    }

    /**
     * Display the specified vendors.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vendors = $this->vendorsRepository->find($id);
    
        if (empty($vendors)) {

            Flash::error('Vendors not found');
    
            return redirect(route('vendors.index'));
        }
    
        // Eager load the 'addedby' relationship
        $vendors->load('addedby');
    
        return view('vendors.show')->with('vendors', $vendors);
    }
    
    /**
     * Show the form for editing the specified vendors.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vendors = $this->vendorsRepository->find($id);

        if (empty($vendors)) {
            Flash::error('Vendors not found');

            return redirect(route('vendors.index'));
        }

        return view('vendors.edit')->with('vendors', $vendors);
    }

    /**
     * Update the specified vendors in storage.
     *
     * @param int $id
     * @param UpdatevendorsRequest $request
     *
     * @return Response
     */
  /**
 * Update the specified vendors in storage.
 *
 * @param int $id
 * @param UpdatevendorsRequest $request
 *
 * @return Response
 */
public function update($id, UpdatevendorsRequest $request)
{
    $vendors = $this->vendorsRepository->find($id);

    if (empty($vendors)) {
        Flash::error('Vendors not found');
        return redirect(route('vendors.index'));
    }

    $input = $request->all();

    // Handle file upload
    if ($request->hasFile('vendorLogo')) {
        // Delete old file if it exists
        if ($vendors->vendorLogo) {
            Storage::disk('public')->delete($vendors->vendorLogo);
        }

        // Upload new file
        $imagePath = $request->file('vendorLogo')->store('vendor_logos', 'public');
        $input['vendorLogo'] = $imagePath;
    }

    // Update the vendor with the new input
    $vendors = $this->vendorsRepository->update($input, $id);

    Flash::success('Vendors updated successfully.');

    return redirect(route('vendors.index'));
}


    /**
     * Remove the specified vendors from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vendors = $this->vendorsRepository->find($id);
    
        if (empty($vendors)) {
            flash()->error('Vendors not found');
            return redirect(route('vendors.index'));
        }
    
        if ($vendors->orders()->exists()) {
            flash()->error('Cannot delete vendor because it has associated orders.');
            return redirect(route('vendors.index'));
        }
    
        $this->vendorsRepository->delete($id);
    
        flash()->success('Vendors deleted successfully.');
    
        return redirect(route('vendors.index'));
    }
    
    
}
