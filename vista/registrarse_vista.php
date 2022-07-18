<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Registrarse</title>
</head>
<body>
<div class="flex items-center justify-center p-12">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <?php if(!empty($message)): ?>
    <p><?= $message ?></p>
  <?php endif ?>

  <h1 class="mr-5 text-xl font-bold block">Registrarse</h1><p class="mr-5 text-gray-400">|</p>
  <a class=" text-blue-600 font-bold" href="index.php?m=iniciar_sesion">Iniciar sesion</a>
  <div class="mx-auto w-full max-w-[550px]">
    <form action="" method="POST">
      <div class="mb-5">
        <label
          for="id"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          ID
        </label>
        <input
          type="text"
          name="id"
          id="id"
          placeholder="ID"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="nombres"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Nombres
        </label>
        <input
          type="text"
          name="nombres"
          id="nombres"
          placeholder="Nombre"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="apellidos"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Apellidos
        </label>
        <input
          type="text"
          name="apellidos"
          id="apellidos"
          placeholder="Apellidos"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="username"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Nickname
        </label>
        <input
          type="text"
          name="username"
          id="username"
          placeholder="Nickname"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="email"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Email
        </label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="example@domain.com"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="password"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Contraseña
        </label>
        <input
          type="password"
          name="password"
          id=""
          placeholder="Contraseña"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="confirm_password"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Repetir contraseña
        </label>
        <input
          type="password"
          name="confirm_password"
          id=""
          placeholder="Repite contraseña"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <div class="opciones">
        <label>Tipo</label>
        <select name="tipo" id="tipo">
          <option value="profesor">Profesor</option>
          <option value="administrativo">Administrativo</option>
        </select>
      </div>

      <div class="opciones">
        <label>Programa</label>
        <select name="programa" id="programa">
          <option value="Ing. Mecanica">Ing. Mecánica</option>
          <option value="Ing. Ambiental">Ing. Ambiental</option>
          <option value="Ing. Industrial">Ing. Industrial</option>
          <option value="Ing. Alimentos">Ing. Alimentos</option>
          <option value="Ing. Sistemas">Ing. Sistemas</option>
        </select>
      </div>
      </div>
      <div>
        <button
          class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
        >
          Registrarse
        </button>
      </div>
    </form>
  </div>
</div>
</body>
</html>
