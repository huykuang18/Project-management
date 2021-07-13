<?php
namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements InterfaceUserRepository
{
    protected $user;
 
    public function __construct(User $user)
    {
        $this->user = $user;
    }
 
    public function all()
    {
        return $this->user->get();
    }

    public function create($data = [])
    {
        return $this->user->create($data);
    }

    public function update($id, $data = [])
    {
        $record = $this->user->findOrFail($id);
 
        return $record->update($data);
    }
 
    public function find($id)
    {
        return $this->user->find($id);
    }

    public function delete($id)
    {
        return $this->user->destroy($id);
    }
}