
    <div class="login">
        <div class="row text-center">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/logo.svg') }}" alt="Logo de mi compañía">
            </a>
        </div>

        <div class="row text-center">
            <div class="col-2"></div>
            <h2 class="col-3 border-bottom" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                aria-expanded="false" aria-controls="multiCollapseExample1">Inicio
            </h2>
            <div class="col-2"></div>
            <h2 class="col-3 border-bottom" type="button" data-bs-toggle="collapse"
                data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                Registro
            </h2>
            <div class="col-2"></div>
        </div>

        <div class="row rounded">
            <div class="col-2"></div>
            <div class="col-3">
                <div class="collapse multi-collapse m-3" id="multiCollapseExample1">
                    <form method="POST" action="{{ route('login-ingreso') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="Correo" class="form-label">Correo:</label>
                            <input type="email" id="Correo" name="Correo" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="Contrasena" class="form-label">Contraseña:</label>
                            <input type="password" id="Contrasena" name="Contrasena" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-primary">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-3">
                <div class="collapse multi-collapse m-3" id="multiCollapseExample2">
                    <form method="POST" action="{{ route('login-crear') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="Apellido" class="form-label">Apellido:</label>
                            <input type="text" id="Apellido" name="Apellido" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="Numero_Documento" class="form-label">Documento:</label>
                            <input type="text" id="Numero_Documento" name="Numero_Documento" class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="Telefono" class="form-label">Telefono:</label>
                            <input type="text" id="Telefono" name="Telefono" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="Correo" class="form-label">Correo:</label>
                            <input type="email" id="Correo" name="Correo" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="Contrasena" class="form-label">Contraseña:</label>
                            <input type="password" id="Contrasena" name="Contrasena" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="Tipo_Usuario" class="form-label">Selecciona un tipo de usuario:</label>
                            <select name="Tipo_Usuario" id="Tipo_Usuario" class="form-control">
                                @foreach ($userTypes as $userType)
                                    <option value="{{ $userType->Id }}">{{ $userType->Nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-primary">Guardar Usuario</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>


