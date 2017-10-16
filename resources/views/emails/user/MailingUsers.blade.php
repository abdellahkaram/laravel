@component('mail::message')
# Welcome To Casamerchants

Bonjour ,
De Nouveau Tache Vous a etè Assignie Dans MerchantManagment
@component('mail::button', ['url' => 'http://localhost:8000/'])
Login in to MerchantManagment
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
