 $(document).ready(function(){
                        $("a[rel=modal]").click( function(ev){
                            ev.preventDefault();
                            
                            var id = $(this).attr("href");
                            
                          
                            
                            /*colocando o fundo preto
                            $('#mascara').css({'width':larguraTela,'height':alturaTela});
                            $('#mascara').fadeIn(1000); 
                            $('#mascara').fadeTo("slow",0.8);*/
                            
                            var left = ($(window).width()/2.6) - ( $(id).width() / 2 );
                            var top = ($(window).height()/4) - ( $(id).height()/1.5);
                            
                            $(id).css({'top':top,'left':left});
                            $(id).show();   
                        });
                        
                        $("#mascara").click( function(){
                            $(this).hide();
                            $(".window").hide();
                        });
                        
                        $('.fechar').click(function(ev){
                            ev.preventDefault();
                            $("#mascara").hide();
                            $(".window").hide();
                        });
                    });