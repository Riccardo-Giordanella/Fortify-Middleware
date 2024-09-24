<x-layout>

    <section class="contaier">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <form class="mt-4 text-white bg-dark p-3 rounded" method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Indirizzo mail</label>
                        <input type="email" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </section>

</x-layout>