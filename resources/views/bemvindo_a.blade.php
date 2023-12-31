<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <!-- Styles -->
    <style>
        .imagemFuncoBemvindos {
            background: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.5)),
                url("{{ Vite::imgurl('rodovia01.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .imgSlogan {
            background: url("{{ Vite::imgurl('rodovia01.jpg') }}");
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


        .svg4 {
            color: rgba(151, 0, 88, 0.727);
        }
    </style>
</head>

<body class="antialiased bg-gray-50">
    <div x-data="{ plansX: false, scrollAtTop: true }" class=" flex flex-col w-full h-full bottom-0 
    fixed bg-white imagemFuncoBemvindos ">
        <div
            class="px-6 py-6 flex flex-row w-full justify-between  
         bg-black/60  text-white z-10 shadow-black/60 shadow-lg ">
            <div class="flex flex-row ">
                @livewire('main.logo-first', ['active_css' => 'z-4 fixed ml-4 w-[80px] hover:shadow-black/60 hover:shadow-lg hover:opacity-90 '])
            </div>

            @livewire('main.menu-first', [
                'div_css' => 'flex flex-row pt-2',
                'ul_css' => '',
                'active_css' => '',
            ])

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
        
        <div id="advantages" class=" md:px-6 py-0 flex flex-col w-full overflow-y-auto ">
            
                    <div class="flex flex-row w-full gap-6 p-4 ">
                        <div class="hidden md:flex md:flex-col w-3/5 overflow-hidden  rounded-md">
                            <img src="{{ Vite::imgurl('reuniao2.jpg') }}" alt="" class="w-full object-cover r-0">
                        </div>
            
                        <div class="px-4 py-6 flex flex-col w-full md:w-2/5 bg-white/50 rounded-md">
                           <h3 class="w-full py-4 mb-4 text-2xl font-bold text-center border-b-4 border-gray-400">Formulário</h3>
                            <div class="w-full py-2">
                                <x-input-label for="sector" value="Setor" />
                                <x-select-search
                                type="text"
                                name="sector"
                                id="sector"
                                class="w-full"
                                searchable="search"
                                :items="[]"
                                />
                            </div>
                            <div class="w-full py-2">
                                <x-input-label for="name" value="Nome" />
                                <x-text-input 
                                type="text"
                                name="name"
                                id="name"
                                class="w-full"
                                />
                            </div>
                            <div class="w-full py-2">
                                <x-input-label for="email" value="E-mail" />
                                <x-text-input 
                                type="text"
                                name="email"
                                id="email"
                                class="w-full"
                                />
                            </div>
                            <div class="w-full py-2">
                                <x-input-label for="phone" value="Celular" />
                                <x-text-input 
                                type="text"
                                name="phone"
                                id="phone"
                                class="w-full"
                                />
                            </div>
                            <div class="w-full py-2">
                                <x-buttons-makes 
                                disabled="false"
                                type="submit"
                                hint="primary"
                                name="Enviar" 
                                class="w-full"
                                >Enviar</x-buttons-makes>
                            </div>
                        </div>
                    </div>
            
            
            
            
            
            
            <div id="home" class=" w-full imgSlogan px-4 md:px-0">
                <div class="flex flex-col  h-[360px] md:h-[540px]">
                    <div
                        class="mt-10 md:ml-4 lg:w-2/3 p-8 text-xl md:text-2xl 
                    bg-black/50 text-white rounded-lg">
                        Desperte Seu Negócio Online:
                        <br><span class="text-base md:text-lg">Invista em um Site e Alcance Novos Horizontes!</span>
                    </div>
                    <div class=" flex flex-row justify-end w-full">
                        <div
                            class="mt-4 md:mt-10 ml-4 text-right mr-0 p-4  md:p-8 
                        text-xl md:text-3xl bg-black/50 text-white rounded-lg">
                            Seu Sucesso Começa Agora:
                            <br><span class="text-base md:text-xl">Abrace a Mudança e Garanta Sua Relevância Online com
                                um Novo
                                Site!</span>
                            <p class="hidden md:block text-lg">O mundo dos negócios está em constante evolução, e a
                                presença online é
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

            <div
                class=" px-4 py-2 md:py-6 mb-2 flex flex-col 
                md:grid md:grid-cols-4 md:items-stretch bg-white/30 rounded-md
                
                ">
                <div class=" p-3 flex flex-col items-start   ">
                    <div class=" flex flex-row items-start ">
                        <div class="pr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 svg1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM13.5 10.5h-6" />
                            </svg>
                        </div>
                        <div class="text-lg font-bold pt-1">Design e Usabilidade:</div>
                    </div>
                    <div class="text-sm line-clamp-2 md:line-clamp-none">O aspecto visual e funcional do site é crucial
                        para atrair e reter
                        usuários. Isso inclui a interface do usuário (UI), que se concentra na aparência estética do
                        site, e a experiência do usuário (UX), que se preocupa com a facilidade de uso e a interação
                        intuitiva. Um design responsivo, que se adapte a diferentes dispositivos, e uma navegação
                        simples são fundamentais para garantir uma boa usabilidade.
                    </div>
                </div>

                <div class="  p-3 flex flex-col items-start  md:border-l-2 ">
                    <div class=" flex flex-row items-start ">
                        <div class="pr-1 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 svg4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <div class="text-lg font-bold pt-1">Segurança:</div>
                    </div>
                    <div class="text-sm line-clamp-2 md:line-clamp-none">A segurança é um aspecto crucial para qualquer
                        site. Isso envolve a
                        implementação de medidas para proteger os dados dos usuários, prevenir ataques cibernéticos,
                        como hacks e phishing, garantir a integridade do site e oferecer uma experiência segura para os
                        visitantes. Isso inclui a utilização de certificados SSL para criptografar dados, atualizações
                        regulares de segurança, escolha de senhas fortes, validação de entrada de dados, entre outras
                        práticas recomendadas.
                    </div>
                </div>

                <div class="  p-3 flex flex-col items-start md:border-l-2 ">
                    <div class="flex flex-row items-start ">
                        <div class="pr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 svg2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                        </div>
                        <div class="text-lg font-bold pt-1">Desenvolvimento:</div>
                    </div>
                    <div>
                        <div class="text-sm line-clamp-2 md:line-clamp-none">A construção técnica do site é vital para
                            sua eficiência. Isso envolve
                            a codificação, a escolha adequada de tecnologias, o gerenciamento de banco de dados e a
                            otimização do desempenho. Um site rápido, seguro e confiável é fundamental para manter
                            os visitantes engajados.</div>
                    </div>
                </div>

                <div class="  p-3 flex flex-col items-start  md:border-l-2 ">
                    <div class="flex flex-row items-start ">
                        <div class="pr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 svg3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                            </svg>
                        </div>
                        <div class="text-lg font-bold pt-1">Conteúdo e SEO:
                        </div>
                    </div>
                    <div class="text-sm line-clamp-2 md:line-clamp-none">O conteúdo do site, incluindo textos, imagens,
                        vídeos e outros
                        elementos,
                        desempenha um papel crucial na atração de tráfego e na retenção de usuários. Além disso,
                        garantir que o site seja facilmente encontrado nos mecanismos de busca é essencial para
                        aumentar sua visibilidade. Isso envolve estratégias de SEO, como o uso de palavras-chave
                        relevantes, metadados apropriados, URLs amigáveis e conteúdo de alta qualidade.
                        <p>(Search Engine Optimization)*</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col w-full mt-6 pb-4 x-transition p-4 md:p-0">
                <h3 id="project"
                    class="w-full text-right text-2xl font-bold text-shy-100/40
                bg-gradient-to-r from-cyan-100/0 to-cyan-100/40 px-8 rounded-t-xl">
                    Planejamentos</h3>
                <div class="h-2 bg-gradient-to-r from-cyan-100/0 to-blue-950/60 "></div>
            </div>

            <div class=" pb-4 flex flex-row w-full justify-between gap-4 ">
                <div class="w-4/6 bg-gray-300">
                    <video controls>
                        <source src="{{ Vite::videourl('Projetos_.mp4') }}" type="video/mp4">
                    </video>
                </div>

                <div class="w-2/6 overflow-hidden ">
                    <img src="{{ Vite::imgurl('desenvolvimento-site.jpg') }}" alt="" class="h-full">
                </div>
            </div>

            <div class=" flex flex-col w-full pt-4 x-transition p-4 md:p-0">
                <h3 id="plans"
                    class="w-full text-2xl font-bold text-shy-100/40
                bg-gradient-to-r from-cyan-100/40 to-cyan-100/0 px-8 rounded-t-xl">
                    Planos</h3>
                <div class="h-2 bg-gradient-to-r from-blue-950/60 to-cyan-100/0 "></div>
            </div>
            <div x-show="plansX" class=" flex flex-row w-full gap-6 py-4 mb-6 pb-1 ">
                <div
                    class="flex flex-col justify-between bg-white/20 w-1/3 p-3 
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
                        <div
                            class=" cursor-pointer rounded-xl
                        bg-orange-700 py-2 w-full h-11 text-lg font-bold text-green-100
                         hover:bg-green-800 hover:text-white ">
                            CONTRATE AGORA</div>
                    </div>
                </div>

                <div
                    class="flex flex-col justify-between bg-white/20 w-1/3 p-3 
                hover:shadow-white/70 shadow-lg
                text-center rounded-xl">
                    <div class=" w-full flex flex-col ">
                        <div class="text-3xl font-bold py-3 bg-sky-900 text-white rounded-t-xl"> Plano Profissional
                        </div>
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
                        <div
                            class=" cursor-pointer rounded-xl
                        bg-orange-700 py-2 w-full h-11 text-lg font-bold text-green-100
                         hover:bg-green-800 hover:text-white ">
                            CONTRATE AGORA</div>
                    </div>
                </div>



                <div
                    class="flex flex-col justify-between bg-white/20 w-1/3 p-3 
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
                        <div
                            class=" cursor-pointer rounded-xl
                        bg-orange-700 py-2 w-full h-11 text-lg font-bold text-green-100
                         hover:bg-green-800 hover:text-white ">
                            CONTRATE AGORA</div>
                    </div>
                </div>
            </div>


            <div class=" flex flex-col w-full pt-4 x-transition p-4 md:p-0">
                <h3 id="contact"
                    class="w-full text-right text-2xl font-bold text-shy-100/40
                bg-gradient-to-r from-cyan-100/0 to-cyan-100/40 px-8 rounded-t-xl">
                    Contato</h3>
                <div class="h-2 bg-gradient-to-r from-cyan-100/0 to-blue-950/60 "></div>
            </div>
            

            <div
                class="px-4 md:px-12 flex flex-col lg:flex-row justify-center 
            w-full pb-8 pt-8 md:pt-12 bg-white/50 gap-10 md:gap-24  ">
                <div class="flex flex-col items-start md:gap-2 
                ">
                    <div class="flex flex-row justify-center w-full md:w-auto  ">
                        @livewire('main.logo-first', ['active_css' => 'w-full md:w-[120px] hover:shadow-black/60 hover:shadow-lg hover:opacity-90 '])
                    </div>
                    <div
                        class=" w-full md:w-auto text-center md:text-left
                    text-2xl md:text-md font-bold text-sky-800 py-3">
                        {{ config('app.name') }}</div>
                    <div class="flex flex-col items-start text-md">
                        <div class="text-sm font-italic">E-mail:</div>
                        <div class="text-xl font-semibold text-sky-700">{{ config('app.emailcontato') }}</div>
                    </div>
                    <div class="flex flex-col items-start p-0 pt-3">
                        <div class="text-sm font-italic">Whatsapp:</div>
                        <div class="text-xl font-semibold text-sky-700">{{ config('app.celularcontato') }}</div>
                    </div>
                </div>

                <div
                    class="flex flex-col items-start 
                border-gray-400 border-t-4 md:border-0 pt-4 md:p-0">
                    <div class="text-2xl font-bold text-sky-900 pb-3">Serviços Disponíveis</div>
                    <div>
                        <ul class="pl-6 list-disc leading-7 font-light font-italic">
                            <li>SEO</li>
                            <li>Criação</li>
                            <li>Consultoria</li>
                            <li>Design</li>
                            <li>Hospedagem</li>
                            <li>Integração completa</li>
                            <li>Marketing</li>
                            <li>Manutenção</li>
                            <li>Suporte técnico</li>
                            <li>Outros serviços consulte-nos </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="flex flex-col items-start 
                border-gray-400 border-t-4 md:border-0 pt-4 md:p-0">
                    <div class="text-2xl font-bold text-sky-900 pb-3">Visibilidade do Site</div>
                    <div class="">
                        <ul class="pl-6 list-disc leading-9 font-light font-italic">
                            <li>Visibilidade Online:</li>
                            <li>Credibilidade e Profissionalismo</li>
                            <li>Acesso Global</li>
                            <li>Marketing e Promoção:</li>
                            <li>Facilidade de Acesso às Informações</li>
                            <li>Interação e Engajamento</li>
                            <li>Vendas Online (se aplicável)</li>
                            <li>Análise e Insights</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>

        <div class="px-4 flex flex-row justify-center w-full py-1 font-black text-xs text-gray-900 bg-black/20 ">
            {{ config('app.name') }} - Copyright <span class="px-2"> © </span> 2020
        </div>
    </div>

    <script>
        function scrollToAnchor(hash) {
            $('html, body').animate({
                scrollTop: $(hash).offset().top + 100
            }, 200, function() {
                window.location.hash = hash;
            });
        }

        $('#plans').on('click', function() {
            console.log('plans2 funciona');
            scrollToAnchor('plans');
        })
    </script>
    @livewireScripts

</body>

</html>
