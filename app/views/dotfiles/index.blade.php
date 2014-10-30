@extends('layouts.main')

@section('title', 'Browse all dotfiles')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-sm-8 col-xs-12">
            <h1>Browse all dotfiles</h1>

            <div class="text-muted">
                <?php $dotfilesTotal = $dotfiles->getTotal(); ?>
                {{ $dotfilesTotal }} {{ Str::plural('Dotfile', $dotfilesTotal) }}<br>
                Page {{ $dotfiles->getCurrentPage() }} of {{ $dotfiles->getLastPage() }}
            </div>
        </div>

        <div class="col-sm-4 col-xs-12">
            @include('partials.search_form')
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            @include('partials.dotfilepaginator')
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-xs-12">
            @foreach($dotfiles as $dotfile)
            @include('partials.dotfile')
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            @include('partials.dotfilepaginator')
        </div>
    </div>

</div>

@stop
