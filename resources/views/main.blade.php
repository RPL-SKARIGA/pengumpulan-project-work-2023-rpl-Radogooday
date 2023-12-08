<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    {{-- Fonts CSS --}}
    <link rel="stylesheet" href="{{ asset('fonts/font.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    {{-- Bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <title>@yield('title')</title>
    
    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Display Profile Image --}}
    <script>
      function handleFileSelect(input) {
          if (input.files && input.files[0]) {
              const reader = new FileReader();
              const displayedProfileImg = document.querySelector('.photo-profile img');

              reader.onload = function(e) {
                  displayedProfileImg.src = e.target.result;
              };

              reader.readAsDataURL(input.files[0]);
          }
      }
    </script>

    {{-- Display Item Image --}}
    <script>
      function handleDisplaySelect(input) {
          if (input.files && input.files[0]) {
              const reader = new FileReader();
              const displayedProfileImg = document.querySelector('.itemPreview img');

              reader.onload = function(e) {
                  displayedProfileImg.src = e.target.result;
              };

              reader.readAsDataURL(input.files[0]);
          }
      }
    </script>

    {{-- Confirm Sell --}}
    <script>
      function confirmSell(button) {
        Swal.fire({
            title: "Do you want to sell this item?",
            text: "Your item will be displayed at the buy page",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Confirm",
        }).then((result) => {
            if (result.isConfirmed) {
                const form = button.closest('form');
                form.submit();
            }
        });
    }
  </script>

  </head>
  <body>

        @yield('content')
        
  </body>

</html>