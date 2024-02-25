<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebabacctmanagersRequest;
use App\Http\Requests\UpdatebabacctmanagersRequest;
use App\Repositories\babacctmanagersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class babacctmanagersController extends AppBaseController
{
    /** @var babacctmanagersRepository $babacctmanagersRepository*/
    private $babacctmanagersRepository;

    public function __construct(babacctmanagersRepository $babacctmanagersRepo)
    {
        $this->babacctmanagersRepository = $babacctmanagersRepo;
    }

    /**
     * Display a listing of the babacctmanagers.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $babacctmanagers = $this->babacctmanagersRepository->paginate(3); // Or any number you prefer
    
        return view('babacctmanagers.index')->with('babacctmanagers', $babacctmanagers);
    }
    

    /**
     * Show the form for creating a new babacctmanagers.
     *
     * @return Response
     */
    public function create()
    {
        return view('babacctmanagers.create');
    }

    /**
     * Store a newly created babacctmanagers in storage.
     *
     * @param CreatebabacctmanagersRequest $request
     *
     * @return Response
     */
    public function store(CreatebabacctmanagersRequest $request)
    {
        $input = $request->all();

        $babacctmanagers = $this->babacctmanagersRepository->create($input);

        Flash::success('Babacctmanagers saved successfully.');

        return redirect(route('babacctmanagers.index'));
    }

    /**
     * Display the specified babacctmanagers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $babacctmanagers = $this->babacctmanagersRepository->find($id);

        if (empty($babacctmanagers)) {
            Flash::error('Babacctmanagers not found');

            return redirect(route('babacctmanagers.index'));
        }

        return view('babacctmanagers.show')->with('babacctmanagers', $babacctmanagers);
    }

    /**
     * Show the form for editing the specified babacctmanagers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $babacctmanagers = $this->babacctmanagersRepository->find($id);

        if (empty($babacctmanagers)) {
            Flash::error('Babacctmanagers not found');

            return redirect(route('babacctmanagers.index'));
        }

        return view('babacctmanagers.edit')->with('babacctmanagers', $babacctmanagers);
    }

    /**
     * Update the specified babacctmanagers in storage.
     *
     * @param int $id
     * @param UpdatebabacctmanagersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebabacctmanagersRequest $request)
    {
        $babacctmanagers = $this->babacctmanagersRepository->find($id);

        if (empty($babacctmanagers)) {
            Flash::error('Babacctmanagers not found');

            return redirect(route('babacctmanagers.index'));
        }

        $babacctmanagers = $this->babacctmanagersRepository->update($request->all(), $id);

        Flash::success('Babacctmanagers updated successfully.');

        return redirect(route('babacctmanagers.index'));
    }

    /**
     * Remove the specified babacctmanagers from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $babacctmanagers = $this->babacctmanagersRepository->find($id);

        if (empty($babacctmanagers)) {
            Flash::error('Babacctmanagers not found');

            return redirect(route('babacctmanagers.index'));
        }

        $this->babacctmanagersRepository->delete($id);

        Flash::success('Babacctmanagers deleted successfully.');

        return redirect(route('babacctmanagers.index'));
    }
}
