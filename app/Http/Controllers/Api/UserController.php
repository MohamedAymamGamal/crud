<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function __construct(private UserService $userService) {}

    public function index(): JsonResponse
    {
        return response()->json(UserResource::collection($this->userService->all()));
    }

    public function store(UserRequest $request): JsonResponse
{
    $user = $this->userService->create($request->validated());
    return response()->json(new UserResource($user), 201);
}

    public function update(UserRequest $request, User $user): JsonResponse
    {
        $updatedUser = $this->userService->update($user, $request->validated());
        return response()->json(new UserResource($updatedUser));
    }

    public function destroy(User $user): JsonResponse
    {
        $this->userService->delete($user);
        return response()->json(['message' => 'User deleted.']);
    }
}
