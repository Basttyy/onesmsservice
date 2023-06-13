<?php
namespace Onesms\Service\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Onesms\Service\Requests\LicenseRequest;
use Onesms\Service\Repositories\LicenseRepository;

class LicenseController extends Controller
{
    protected $request;
    protected $repo;

    public function __construct(
        Request $request,
        LicenseRepository $repo
    ) {
        $this->request = $request;
        $this->repo = $repo;
    }

    public function verify(LicenseRequest $request)
    {
        $this->repo->verify($this->request->all());

        return $this->success(['message' => trans('install.verified')]);
    }
}
