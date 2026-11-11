<?php
@extends('layouts.app')

@section('title', 'Registrieren')

@section('content')

    <div class="mx-auto max-w-md rounded-xl bg-white p-8 shadow-lg">

        <h1 class="mb-2 text-center text-3xl font-bold">
            Konto erstellen
        </h1>

        <p class="mb-8 text-center text-gray-500">
            Registriere dich und starte jetzt.
        </p>

        {{-- Fehlermeldungen --}}
        @if ($errors->any())
            <div class="mb-6 rounded-lg bg-red-100 p-4 text-sm text-red-700">
                <ul class="list-inside list-disc">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Registrierungsformular --}}
        <form method="POST" action="{{ route('register') }}">

            @csrf

            {{-- Name --}}
            <div class="mb-5">
                <label for="name"
                       class="mb-2 block text-sm font-medium">
                    Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autocomplete="name"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3
                       focus:border-indigo-500 focus:outline-none
                       focus:ring-2 focus:ring-indigo-200"
                    placeholder="Max Mustermann"
                >
            </div>

            {{-- E-Mail --}}
            <div class="mb-5">
                <label for="email"
                       class="mb-2 block text-sm font-medium">
                    E-Mail-Adresse
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3
                       focus:border-indigo-500 focus:outline-none
                       focus:ring-2 focus:ring-indigo-200"
                    placeholder="name@beispiel.de"
                >
            </div>

            {{-- Passwort --}}
            <div class="mb-5">
                <label for="password"
                       class="mb-2 block text-sm font-medium">
                    Passwort
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3
                       focus:border-indigo-500 focus:outline-none
                       focus:ring-2 focus:ring-indigo-200"
                    placeholder="Mindestens 8 Zeichen"
                >
            </div>

            {{-- Passwort bestätigen --}}
            <div class="mb-6">
                <label for="password_confirmation"
                       class="mb-2 block text-sm font-medium">
                    Passwort bestätigen
                </label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3
                       focus:border-indigo-500 focus:outline-none
                       focus:ring-2 focus:ring-indigo-200"
                    placeholder="Passwort wiederholen"
                >
            </div>

            {{-- Absenden --}}
            <x-button>
                Konto erstellen
            </x-button>


        </form>

        {{-- Link zum Login --}}
        <p class="mt-6 text-center text-sm text-gray-600">
            Du hast bereits ein Konto?

            <a href="{{ route('login') }}"
               class="font-medium text-indigo-600 hover:underline">
                Jetzt anmelden
            </a>
        </p>

    </div>

@endsection
