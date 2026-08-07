<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\ContactRequest;
use App\Repository\ContactRepository;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        return view('home.mobile.contact');
    }

    /**
     * 留言
     * @param ContactRequest $request
     * @param ContactRepository $contactRepository
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ContactRequest $request,ContactRepository $contactRepository){
        try {
            $contactRepository->create($request->all());
            return response()->json(['message'=>'留言成功'],200);
        }catch (\Exception $exception){
            return response()->json(['message'=>'系統異常','error'=>$exception->getMessage()],400);
        }

    }
}
