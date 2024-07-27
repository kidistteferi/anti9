<?php

namespace App\Http\Controllers\Admin\Receiver;

use App\Http\Requests;
use App\Http\Requests\Receiver\CreateReceiverRequest;
use App\Http\Requests\Receiver\UpdateReceiverRequest;
use App\Repositories\Receiver\ReceiverRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Receiver\Receiver;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ReceiverController extends InfyOmBaseController
{
    /** @var  ReceiverRepository */
    private $receiverRepository;

    public function __construct(ReceiverRepository $receiverRepo)
    {
        $this->receiverRepository = $receiverRepo;
    }

    /**
     * Display a listing of the Receiver.
     *
     * @param Request $request
     * @return Response
     */
    public function commentrec(Request $request){
        //    // $result = Message::where('id',$id)->get();comment
            $request = $request->all();
           
             $mid = $request['mid'];
            $comment = $request['comment_rec'];
              $result = Head::create([
                'id' => $mid,
               'comment_rec' => $comment,
               'accept' => '1'
               ]);
               //dd($result);
        //       //message id, approve = 1 0 , comment = value 
             return redirect('receiver');
          }
    public function index(Request $request)
    {

        $this->receiverRepository->pushCriteria(new RequestCriteria($request));
        $receivers = $this->receiverRepository->all();
        return view('admin.receiver.receivers.index')
            ->with('receivers', $receivers);
    }

    /**
     * Show the form for creating a new Receiver.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.receiver.receivers.create');
    }

    /**
     * Store a newly created Receiver in storage.
     *
     * @param CreateReceiverRequest $request
     *
     * @return Response
     */
    public function store(CreateReceiverRequest $request)
    {
        $input = $request->all();

        $receiver = $this->receiverRepository->create($input);

        Flash::success('Receiver saved successfully.');

        return redirect(route('admin.receiver.receivers.index'));
    }

    /**
     * Display the specified Receiver.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $receiver = $this->receiverRepository->findWithoutFail($id);

        if (empty($receiver)) {
            Flash::error('Receiver not found');

            return redirect(route('receivers.index'));
        }

        return view('admin.receiver.receivers.show')->with('receiver', $receiver);
    }

    /**
     * Show the form for editing the specified Receiver.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $receiver = $this->receiverRepository->findWithoutFail($id);

        if (empty($receiver)) {
            Flash::error('Receiver not found');

            return redirect(route('receivers.index'));
        }

        return view('admin.receiver.receivers.edit')->with('receiver', $receiver);
    }

    /**
     * Update the specified Receiver in storage.
     *
     * @param  int              $id
     * @param UpdateReceiverRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReceiverRequest $request)
    {
        $receiver = $this->receiverRepository->findWithoutFail($id);

        

        if (empty($receiver)) {
            Flash::error('Receiver not found');

            return redirect(route('receivers.index'));
        }

        $receiver = $this->receiverRepository->update($request->all(), $id);

        Flash::success('Receiver updated successfully.');

        return redirect(route('admin.receiver.receivers.index'));
    }

    /**
     * Remove the specified Receiver from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.receiver.receivers.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Receiver::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.receiver.receivers.index'))->with('success', Lang::get('message.success.delete'));

       }

}
