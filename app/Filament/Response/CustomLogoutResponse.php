<?php

namespace App\Filament\Responses;

use Filament\Http\Responses\Auth\LogoutResponse as BaseLogoutResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;

class CustomLogoutResponse extends BaseLogoutResponse
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
     */
    public function toResponse($request): RedirectResponse|Redirector
    {
        return redirect('/');
    }
}
