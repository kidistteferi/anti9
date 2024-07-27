<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Repositories\MessageRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Message;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MessageController extends InfyOmBaseController
{
    /** @var  MessageRepository */
    private $messageRepository;

    public function __construct(MessageRepository $messageRepo)
    {
        $this->messageRepository = $messageRepo;
    }

    /**
     * Display a listing of the Message.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->messageRepository->pushCriteria(new RequestCriteria($request));
        $messages = $this->messageRepository->all();
        return view('admin.messages.index')
            ->with('messages', $messages);
    }

    /**
     * Show the form for creating a new Message.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.messages.create');
    }

    /**
     * Store a newly created Message in storage.
     *
     * @param CreateMessageRequest $request
     *
     * @return Response
     */
    public function store(CreateMessageRequest $request)
    {
        $input = $request->all();

        $message = $this->messageRepository->create($input);

        Flash::success('Message saved successfully.');

        return redirect(route('admin.messages.index'));
    }

    /**
     * Display the specified Message.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $message = $this->messageRepository->findWithoutFail($id);

        if (empty($message)) {
            Flash::error('Message not found');

            return redirect(route('messages.index'));
        }

        return view('admin.messages.show')->with('message', $message);
    }

    /**
     * Show the form for editing the specified Message.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $message = $this->messageRepository->findWithoutFail($id);

        if (empty($message)) {
            Flash::error('Message not found');

            return redirect(route('messages.index'));
        }

        return view('admin.messages.edit')->with('message', $message);
    }

    /**
     * Update the specified Message in storage.
     *
     * @param  int              $id
     * @param UpdateMessageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMessageRequest $request)
    {
        $message = $this->messageRepository->findWithoutFail($id);

        

        if (empty($message)) {
            Flash::error('Message not found');

            return redirect(route('messages.index'));
        }

        $message = $this->messageRepository->update($request->all(), $id);

        Flash::success('Message updated successfully.');

        return redirect(route('admin.messages.index'));
    }

    /**
     * Remove the specified Message from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.messages.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Message::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.messages.index'))->with('success', Lang::get('message.success.delete'));

       }

}
