<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateComplaintsRequest;
use App\Http\Requests\UpdateComplaintsRequest;
use App\Repositories\ComplaintsRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Complaints;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ComplaintsController extends InfyOmBaseController
{
    /** @var  ComplaintsRepository */
    private $complaintsRepository;

    public function __construct(ComplaintsRepository $complaintsRepo)
    {
        $this->complaintsRepository = $complaintsRepo;
    }

    /**
     * Display a listing of the Complaints.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->complaintsRepository->pushCriteria(new RequestCriteria($request));
        $complaints = $this->complaintsRepository->all();
        return view('admin.complaints.index')
            ->with('complaints', $complaints);
    }

    /**
     * Show the form for creating a new Complaints.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.complaints.create');
    }

    /**
     * Store a newly created Complaints in storage.
     *
     * @param CreateComplaintsRequest $request
     *
     * @return Response
     */
    public function store(CreateComplaintsRequest $request)
    {
        $input = $request->all();

        $complaints = $this->complaintsRepository->create($input);

        Flash::success('Complaints saved successfully.');

        return redirect(route('admin.complaints.index'));
    }

    /**
     * Display the specified Complaints.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $complaints = $this->complaintsRepository->findWithoutFail($id);

        if (empty($complaints)) {
            Flash::error('Complaints not found');

            return redirect(route('complaints.index'));
        }

        return view('admin.complaints.show')->with('complaints', $complaints);
    }

    /**
     * Show the form for editing the specified Complaints.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $complaints = $this->complaintsRepository->findWithoutFail($id);

        if (empty($complaints)) {
            Flash::error('Complaints not found');

            return redirect(route('complaints.index'));
        }

        return view('admin.complaints.edit')->with('complaints', $complaints);
    }

    /**
     * Update the specified Complaints in storage.
     *
     * @param  int              $id
     * @param UpdateComplaintsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateComplaintsRequest $request)
    {
        $complaints = $this->complaintsRepository->findWithoutFail($id);

        

        if (empty($complaints)) {
            Flash::error('Complaints not found');

            return redirect(route('complaints.index'));
        }

        $complaints = $this->complaintsRepository->update($request->all(), $id);

        Flash::success('Complaints updated successfully.');

        return redirect(route('admin.complaints.index'));
    }

    /**
     * Remove the specified Complaints from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.complaints.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Complaints::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.complaints.index'))->with('success', Lang::get('message.success.delete'));

       }

}
