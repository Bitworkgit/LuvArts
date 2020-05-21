 var bar = new progressBar.Line('.upload', {
            strokeWidth: 4,
            easing: 'easeInOut',
            duration: 1400,
            color: '#FFEA82',
            trailColor: '#eee',
            trailWidth: 1,
            svgStyle: {width: '100%', height: '100%'},
            text: {
            style: {
                color: 'black',
                position: 'absolute',
                right: '0',
                top: '30px',
                padding: 0,
                margin: 0,
                transform: null
            },
                autoStyleContainer: false
            },
            from: {color: '#1803ff'},
            to: {color: '##4bc4b0'},
            step: (state, bar) => {
                bar.setText(Math.round(bar.value() * 100) + ' %');
                bar.path.setAttribute('stroke', state.color);
            }
        });
        
        $('form').ajaxForm({
            success: function (data) {
                if(data['sucesso']){
                    iziToast.success({title: ':)', message: data['sucesso']});
                    window.location.reload(false);
                }
                else {
                    for(var a in data['erro']){
                        iziToast.error({title: ':(', message: data['erro'][a]}); 
                    }
                }
            },
            uploadProgress: function(event, position, total, percentComplete) {
                bar.animate(percentComplete * 0.01);
            }
        })
       @endif

        @if(session('success'))
			 @endif

        @if(!empty($colecoes))
            @foreach($colecoes as $item)