<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Negócios Promissores</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <style>
        .imagemFuncoBemvindos {
            background:
                linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.5)),
                url("{{ Vite::imgurl('rodovia01.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .imgSlogan {
            background:
                url("{{ Vite::imgurl('rodovia01.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .svg1 {
            color: rgba(0, 80, 146, 0.727);
        }

        .svg2 {
            color: rgba(213, 96, 0, 0.727);
        }

        .svg3 {
            color: rgba(26, 112, 0, 0.727);
        }

        #scrollButton {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: none;
            width: 50px;
            height: 40px;
        }
    </style>
</head>

<body class="antialiased bg-gray-50">
    <div class="flex flex-col w-full h-full bottom-0 
    fixed bg-white imagemFuncoBemvindos">
        <div class="px-6 py-6 flex flex-row w-full justify-between  
         bg-black/60  text-white z-10 shadow-lg">
            <div class="flex flex-row ">
                <img src="{{ Vite::imgurl('logo2.jpg') }}" alt="Negócios Promissores" title="Negócios Promissores"
                    class="w-[45px] h-auto rounded-md">
            </div>
            <div class="flex flex-row xs:hidden pt-2">
                <a href="#home" class="px-4">Home</a> |
                <a href="#project" class="px-4">Projetos</a> |
                <a href="#plans" class="px-4">Planos</a> |
                <a href="#contact" class="px-4">Contato</a>

            </div>

            <div class="flex flex-row pr-2 pt-2">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-semibold text-white hover:text-gray-300 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-white hover:text-gray-300 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-white hover:text-gray-300 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                @endif


            </div>
        </div>
        <div class="p-6 pt-0 flex flex-col w-full overflow-y-auto ">
            <div id="home" class="  w-full imgSlogan ">
                <div class="flex flex-col  h-[350px] lg:h-[540px]">
                    <div class="mt-10 ml-4 lg:w-2/3 p-8 text-2xl bg-black/50 text-white rounded-lg">Desperte a Presença
                        Online do Seu Negócio:
                        <br><span class="text-lg">Invista em um Site e Alcance Novos Horizontes!</span>
                    </div>
                    <div class=" flex flex-row justify-end w-full">
                        <div class="mt-10 ml-4  text-right mr-0 p-8 text-3xl bg-black/50 text-white rounded-lg">
                            Seu Sucesso Começa Agora:
                            <br><span class="text-xl">Abrace a Mudança e Garanta Sua Relevância Online com um Novo
                                Site!</span>
                            <p class="text-lg">O mundo dos negócios está em constante evolução, e a presença online é
                                mais crucial do que nunca. Seja para expandir seu alcance, aumentar suas vendas ou
                                fortalecer sua marca, a necessidade de um site atualizado é inegável. Sua empresa merece
                                estar na vanguarda da internet, cativando clientes e destacando-se da concorrência. Com
                                um novo site, você não apenas se adapta às demandas do mercado atual, mas também cria
                                uma plataforma dinâmica para interagir com seu público-alvo, transmitir sua mensagem e
                                gerar resultados impactantes. Não deixe para amanhã o que pode impulsionar seu sucesso
                                hoje. Invista em um novo site e prepare-se para uma jornada de conquistas e crescimento
                                contínuo!</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="px-4 py-6 flex flex-col md:grid md:grid-cols-4 md:items-stretch  bg-white/30 rounded-md">
                <div class="p-3 flex flex-col items-start   ">
                    <div class=" flex flex-row items-start ">
                        <div class="pr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 svg1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM13.5 10.5h-6" />
                            </svg>
                        </div>
                        <div class="text-lg font-bold">Design e Usabilidade:</div>
                    </div>
                    <div class="text-sm">O aspecto visual e funcional do site é crucial para atrair e reter
                        usuários. Isso inclui a interface do usuário (UI), que se concentra na aparência estética do
                        site, e a experiência do usuário (UX), que se preocupa com a facilidade de uso e a interação
                        intuitiva. Um design responsivo, que se adapte a diferentes dispositivos, e uma navegação
                        simples são fundamentais para garantir uma boa usabilidade.
                    </div>
                </div>

                <div class="p-3 flex flex-col items-start  md:border-l-2 ">
                    <div class=" flex flex-row items-start ">
                        <div class="pr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 svg1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM13.5 10.5h-6" />
                            </svg>
                        </div>
                        <div class="text-lg font-bold">Segurança:</div>
                    </div>
                    <div class="text-sm">A segurança é um aspecto crucial para qualquer site. Isso envolve a
                        implementação de medidas para proteger os dados dos usuários, prevenir ataques cibernéticos,
                        como hacks e phishing, garantir a integridade do site e oferecer uma experiência segura para os
                        visitantes. Isso inclui a utilização de certificados SSL para criptografar dados, atualizações
                        regulares de segurança, escolha de senhas fortes, validação de entrada de dados, entre outras
                        práticas recomendadas.
                    </div>
                </div>

                <div class="p-3 flex flex-col items-start md:border-l-2 ">
                    <div class="flex flex-row items-start ">
                        <div class="pr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 svg2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                        </div>
                        <div class="text-lg  font-bold">Desenvolvimento e Performance:</div>
                    </div>
                    <div>
                        <div class="text-sm">A construção técnica do site é vital para sua eficiência. Isso envolve
                            a codificação, a escolha adequada de tecnologias, o gerenciamento de banco de dados e a
                            otimização do desempenho. Um site rápido, seguro e confiável é fundamental para manter
                            os visitantes engajados.</div>
                    </div>
                </div>

                <div class="p-3 flex flex-col items-start  md:border-l-2 ">
                    <div class="flex flex-row items-start ">
                        <div class="pr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 svg3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                            </svg>
                        </div>
                        <div class="text-lg  font-bold">Conteúdo e SEO:
                        </div>
                    </div>
                    <div class="text-sm">O conteúdo do site, incluindo textos, imagens, vídeos e outros
                        elementos,
                        desempenha um papel crucial na atração de tráfego e na retenção de usuários. Além disso,
                        garantir que o site seja facilmente encontrado nos mecanismos de busca é essencial para
                        aumentar sua visibilidade. Isso envolve estratégias de SEO, como o uso de palavras-chave
                        relevantes, metadados apropriados, URLs amigáveis e conteúdo de alta qualidade.
                        <p>(Search Engine Optimization)*</p>
                    </div>
                </div>
            </div>

            <div class="px-4 flex flex-row w-full pt-4 x-transition">
                <h3 id="project" class="text-2xl font-bold">Projetos</h3>
            </div>

            <div class="px-4 flex flex-row w-full justify-between gap-4 pt-4">

                <div class="flex flex-col  ">
                    <div>
                        <img src="{{ Vite::imgurl('reuniao2.jpg') }}" alt="" class="w-[30%]">
                    </div>
                </div>
                <div class="flex flex-col">
                    <div>
                        <img src="{{ Vite::imgurl('desenvolvimento-site.jpg') }}" alt="">
                    </div>
                    <br>

                </div>

            </div>

            <div class="px-4 flex flex-row w-full pt-4 x-transition">
                <h3 class="text-2xl font-bold">Planos</h3>
            </div>
            <div id="plans" class="flex flex-row w-full gap-6 p-4 ">
                <div class="flex flex-col justify-between bg-white/20 w-1/3 p-3 
                hover:shadow-white/70 shadow-lg
                text-center rounded-xl">
                    <div class=" w-full flex flex-col ">
                        <div class="text-3xl font-bold py-3 bg-sky-900 text-white rounded-t-xl"> Plano Essencial</div>
                        <div class="flex flex-col bg-white/50 text-left p-3 pl-8 rounded-b-xl">
                            <ul class="list-decimal ">
                                <li> Design responsivo e moderno para até 5 páginas</li>
                                <li> Integração básica com redes sociais </li>
                                <li> Otimização básica para mecanismos de busca (SEO)</li>
                                <li> Hospedagem por 1 ano</li>
                                <li> Suporte técnico por e-mail durante 30 dias após o lançamento</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="py-2 text-3xl text-indigo-950 font-black">R$ 4.500,00</div>
                        <div class=" cursor-pointer rounded-xl
                        bg-orange-700 py-2 w-full h-11 text-lg font-bold text-green-100
                         hover:bg-green-800 hover:text-white ">CONTRATE AGORA</div>
                    </div>
                </div>

                <div class="flex flex-col justify-between bg-white/20 w-1/3 p-3 
                hover:shadow-white/70 shadow-lg
                text-center rounded-xl">
                    <div class=" w-full flex flex-col ">
                        <div class="text-3xl font-bold py-3 bg-sky-900 text-white rounded-t-xl"> Plano Profissional</div>
                        <div class="flex flex-col bg-white/50 text-left p-3 pl-8 rounded-b-xl">
                            <ul class="list-decimal ">
                                <li> Design personalizado para até 10 páginas</li>
                                <li> Integração avançada com redes sociais e plugins </li>
                                <li> Blog ou seção de notícias</li>
                                <li> Otimização avançada para mecanismos de busca (SEO)</li>
                                <li> Formulários avançados e até 2 funcionalidades extras (ex: galeria de imagens,
                                    calendário)</li>
                                <li> Hospedagem por 1 ano</li>
                                <li> Suporte técnico por e-mail durante 60 dias após o lançamento</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="py-2 text-3xl text-indigo-950 font-black">R$ 4.500,00</div>
                        <div class=" cursor-pointer rounded-xl
                        bg-orange-700 py-2 w-full h-11 text-lg font-bold text-green-100
                         hover:bg-green-800 hover:text-white ">CONTRATE AGORA</div>
                    </div>
                </div>



                <div class="flex flex-col justify-between bg-white/20 w-1/3 p-3 
                  hover:shadow-white/70 shadow-lg
                text-center rounded-xl">
                    <div class=" w-full flex flex-col ">
                        <div class="text-3xl font-bold py-3 bg-sky-900 text-white rounded-t-xl"> Plano Plus</div>
                        <div class="flex flex-col bg-white/50 text-left p-3 pl-8 rounded-b-xl">
                            <ul class="list-decimal leading-5">
                                <li> Design responsivo e moderno para até 15 páginas</li>
                                <li> Integração completa com redes sociais, e-commerce e/ou outras plataformas </li>
                                <li> Blog dinâmico com gerenciamento de conteúdo</li>
                                <li> SEO avançado, análise de dados e relatórios periódicos</li>
                                <li> Formulários avançados, funcionalidades customizadas (ex: chat online, reservas)
                                </li>
                                <li> Hospedagem por 1 ano com certificado SSL</li>
                                <li> Suporte técnico por e-mail durante 90 dias após o lançamento</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="py-2 text-3xl text-indigo-950 font-black">R$ 4.500,00</div>
                        <div class=" cursor-pointer rounded-xl
                        bg-orange-700 py-2 w-full h-11 text-lg font-bold text-green-100
                         hover:bg-green-800 hover:text-white ">CONTRATE AGORA</div>
                    </div>
                </div>
            </div>
            <div class="px-4 flex flex-row w-full pt-4 x-transition">
                <br>
                <hr>
                <h3 id="contact" class="text-2xl font-bold">Contato</h3>
                <br><br><br><br><br><br><br><br><br><br><br>
                <br>
                <hr>
                <br>
                <hr>
                <br>
                <hr>
                <br>
                <hr>
                <br>
                <hr>
                <br>
                <hr>
                <br>
                <hr>
                <br>
                <hr>
                <br>
                <hr>
                <br>
                <hr>
                <br>
                <hr>

            </div>
        </div>


    </div>
    <button id="scrollButton" class="w-full h-4 bg-gray-200"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
        </svg>
    </button>

    <script>
        // JavaScript para el scroll suave dentro de la div
        const scrollableDiv = document.getElementById('scrollableDiv');
        const scrollButton = document.getElementById('scrollButton');

        // Mostrar el botón después de desplazarse cierta distancia dentro de la div
        scrollableDiv.addEventListener('scroll', () => {
            if (scrollableDiv.scrollTop > 300) {
                scrollButton.style.display = 'block';
            } else {
                scrollButton.style.display = 'none';
            }
        });

        // Función para realizar el scroll suave dentro de la div
        function scrollToTop() {
            const scrollDuration = 1000; // Duración del scroll en milisegundos
            const scrollStep = -scrollableDiv.scrollTop / (scrollDuration / 15);

            const scrollInterval = setInterval(() => {
                if (scrollableDiv.scrollTop !== 0) {
                    scrollableDiv.scrollBy(0, scrollStep);
                } else {
                    clearInterval(scrollInterval);
                }
            }, 15);
        }

        // Evento click para el botón de scroll
        scrollButton.addEventListener('click', scrollToTop);
    </script>

</body>

</html>
