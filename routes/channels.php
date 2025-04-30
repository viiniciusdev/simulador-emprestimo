<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Canais de Transmissão
|--------------------------------------------------------------------------
|
| Aqui você pode registrar todos os canais de transmissão de eventos que sua
| aplicação suporta. As funções de autorização do canal fornecidas são
| usadas para verificar se um usuário autenticado pode ouvir o canal.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
