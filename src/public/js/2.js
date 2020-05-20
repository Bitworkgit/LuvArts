  var entrada = document.getElementById('pesquisa');
          entrada.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                var url = '{{ route('pesquisar') }}/' + $("#pesquisa").val();
                window.location.href = url;
            }
          });
