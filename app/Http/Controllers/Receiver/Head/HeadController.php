<?php

namespace App\Http\Controllers\Head\Head;

use App\Http\Requests;
use App\Http\Requests\Head\CreateHeadRequest;
use App\Http\Requests\Head\UpdateHeadRequest;
use App\Repositories\Head\HeadRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Head\Head;
use App\Models\Complaints;
use App\Models\Message;

use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HeadController extends InfyOmBaseController
{
    /** @var  HeadRepository */
    private $headRepository;

    public function __construct(HeadRepository $headRepo)
    {
        $this->headRepository = $headRepo;
    }

    /**
     * Display a listing of the Head.
     *
     * @param Request $request
     * @return Response
     */
    // public function head(){
      
    //     $result = Complaints::join('messages','messages.c_id','complaints.id')
    //        ->get();
    //     //details.blade
    //   return view('head.head.head')->with(['data'=>$result]);
    //  }
    //  public function details($id){
    //   $result = Message::where('id',$id)->get();
    //     // dd('');
    //     return view('head.details')->with(['data'=>$result]);
    // }
    public function comment(Request $request){
     // $result = Message::where('id',$id)->get();comment
     $request = $request->all();
       $mid = $request['mid'];
       $comment = $request['comment'];
       $result = Head::create([
        'id' => $mid,
        'comment' => $comment,
        'approve' => '1'
       ]);
       //dd($result);
       //message id, approve = 1 0 , comment = value 
      return redirect('head');
   }
     public function index(Request $request)
    {

        $heads =  Complaints::join('messages','messages.c_id','complaints.id')
        ->get();
        return view('head.head.heads.index')
            ->with('heads', $heads);
    }

    /**
     * Show the form for creating a new Head.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.head.heads.create');
    }

    /**
     * Store a newly created Head in storage.
     *
     * @param CreateHeadRequest $request
     *
     * @return Response
     */
    public function store(CreateHeadRequest $request)
    {
        $input = $request->all();

        $head = $this->headRepository->create($input);

        Flash::success('Head saved successfully.');

        return redirect(route('admin.head.heads.index'));
    }

    /**
     * Display the specified Head.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        

        // $head = $this->headRepository->findWithoutFail($id);
        $head = Message::where('id',$id)->get();


        if (empty($head)) {
            Flash::error('Head not found');

            return redirect(route('heads.index'));
        }

        return view('head.head.heads.show')->with('head', $head);
    }

    /**
     * Show the form for editing the specified Head.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $head = $this->headRepository->findWithoutFail($id);

        if (empty($head)) {
            Flash::error('Head not found');

            return redirect(route('heads.index'));
        }

        return view('admin.head.heads.edit')->with('head', $head);
    }

    /**
     * Update the specified Head in storage.
     *
     * @param  int              $id
     * @param UpdateHeadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHeadRequest $request)
    {
        $head = $this->headRepository->findWithoutFail($id);

        

        if (empty($head)) {
            Flash::error('Head not found');

            return redirect(route('heads.index'));
        }

        $head = $this->headRepository->update($request->all(), $id);

        Flash::success('Head updated successfully.');

        return redirect(route('admin.head.heads.index'));
    }

    /**
     * Remove the specified Head from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.head.heads.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Head::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.head.heads.index'))->with('success', Lang::get('message.success.delete'));

       }

}
