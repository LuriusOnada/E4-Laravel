<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function createComment(Request $request)
    {
        // Get authenticated user
        $user = $request->user();

        $image = $request->image();

        // Is user image owner ?
        if($this->imageRepository->isOwner ($user, $image)) {
            return response()->json(['status' => 'no']);
        }

        // Rating
        $comment = $this->imageRepository->commentImage ($user, $image, $request->comment);

        return [
            'status' => 'ok',
            'id' => $image->id,
            'comment' => $comment
        ];
    }

    public function updateComment(Request $request, ImageUser $comment)
    {

    }

    public function deleteComment(Request $request, ImageUser $comment)
    {

    }

}
