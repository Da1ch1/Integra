@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <style>
        html {
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Handlee', cursive;
            font-size: 13pt;
            background-color: #e8e6ef;
            padding: 10px;
            margin: 0;
        }
        h1 {
            font-size: 15pt;
            color: #7c3caf;
            text-align: center;
            padding: 18px 0 18px 0;
            margin: 0 0 10px 0;
        }
        h1 span {
            border: 4px dashed #7c3caf
        }
        p {
            padding: 0;
            margin: 0;

        }
        .img-circle {
            border: 3px solid white;
            border-radius: 50%;
        }
        .section {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        #header {
            background-image: url("https://img.freepik.com/vector-gratis/fondo-formas-hexagono-abstracto-degradado_23-2149120168.jpg?w=900&t=st=1659993065~exp=1659993665~hmac=217a71e945a9c072dbaee9d35e2be5326e0623f1b9028fbdc80e1d3ad98cc009");
            background-size: cover;

        }
        #header img {
            display: block;
            width: 80px;
            height: 80px;
            margin: auto;
            position: center;
        }
        #header p {
            font-size: 25pt;
            color: #3b464c;
            padding-top: 5px;
            margin: 0;
            font-weight: bold;
            text-align: center;
            color: #ffffff;
        }
        .quote {
            font-size: 12pt;
            text-align: right;
            margin-top: 10px;
        }
        table {
            width: 100%;
            font-size: 11pt;
        }
        table, th, td {
            border: 2px solid #cecece;
            border-collapse: collapse;
            text-align: center;
            table-layout: fixed;
        }
        .selected {
            background-color: #765cc4;
            font-weight: bold;
            color: white;
        }
        li {
            margin-bottom: 15px;
            font-weight: bold;
        }
        progress {
            width: 70%;
            height: 20px;
            color: #7c3caf;
            background: #efefef;
        }
        progress::-webkit-progress-bar {
            background: #efefef;
        }
        progress::-webkit-progress-value {
            background: #7c3caf;
        }
        progress::-moz-progress-bar {
            color: #7c3caf;
            background: #efefef;
        }
        iframe, audio {
            display: block;
            margin: 0 auto;
            border: 3px solid #7c3caf;
        }
        hr {
            border: 0;
            height: 1px;
            background: #f36f48;
        }
        form {
            text-align: center;
            margin-top: 0;
        }
        .submit {
            background-color: #7c3caf;
            padding: 12px 45px;
            border-radius: 5px;
            cursor: pointer;
            color: #ffffff;
            border: none;
            outline: none;
            margin: 0;
            font-weight: bold;
        }
        .submit:hover {
            background-color: #7c3caf;
        }
        textarea {
            height: 100px;
        }
        input, textarea {
            margin-bottom: 10px;
            font-size: 11pt;
            padding: 15px 10px 10px;
            border: 1px solid #cecece;
            background-color: #efefef;
            color: #787575;
            border-radius: 5px;
            width: 70%;
            outline: none;
        }
        .face {
            transform: scale(0.4);
            margin: 0 auto;
            display: block;
            margin-top: -35px;
            margin-bottom: -25px;
        }
        #contacts img {
            height: 50px;
            width: 50px;
            margin-left: 7px;
            margin-right: 7px;
        }
        #contacts a {
            text-decoration: none;
        }
        #contacts img:hover {
            opacity: 0.8;
        }
        #contacts {
            text-align: center;
        }
        .copyright {
            font-size: 8pt;
            text-align: right;
            padding-bottom: 10px;
            color: grey;
        }

    </style>
    <div class="content">
        <div class="row">
            <body>
            <div class="col-12">
                <div class="card card-chart">
                    <div class="card-header ">


                            <!-- header start -->
                            <div id="header" class="section">
                                <img alt="" class="img-circle" src="{{ asset('material') }}/img/new_logo.png" alt="">
                                <p>Integra SA.</p>
                            </div>
                            <!-- header end -->
                         <!--   <canvas id="myChart" width="400" height="400"></canvas> -->




                    </div>
                    <div class="card-body">
                        <div>
                            <!--     <canvas id="chart-integra" style="display: block; width: 100%; height: 600px"></canvas>-->




                            <!-- About Me section start -->
                            <div class="section">
                                <h1><span>Acerca de Nosotros</span></h1>
                                <p>
                                    Hola! <strong>Nosotros somos Integra SA</strong>. Somos una empresa seria dedicada a la elaboracion y venta de productos de seguridad. <br>
                                    Contamos con profecionales para adecuarnos a sus proyectos. Trabajamos duro para brindarle un excelente serivicio <i>y pueda tener la mejor seguridad</i> <br>
                                   Y de tal manera que usted y su familia puedan sentir esa tranquilidad <strong>que tanto busca</strong>. Ofrecemos Servicio Integral y Profesional en Sistemas de Seguridad Electronica, Como sensores, Camaras de Seguridad y Video Vigilancia. <br> Venta e Instalacion.
                                </p>
                                <p class="quote">"Integra SA, profecionales en seguridad"</p>
                            </div>
                            <!-- About Me section end -->
                        </div>
                    </div>
                </div>
                <br>
                <br>
                            <!-- Horarios de atención -->
                            <div class="section">
                                <h1><span>Horarios de atención</span></h1>
                                <table>
                                    <tr>
                                        <th>Hora</th>
                                        <th>Lunes</th>
                                        <th>Martes</th>
                                        <th>Miercoles</th>
                                        <th>Jueves</th>
                                        <th>Viernes</th>
                                        <th>Sabado</th>
                                        <th>Domingo</th>
                                    </tr>
                                    <tr>
                                        <td>8:00 am</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td>Cerrado</td>
                                        <td>Cerrado</td>
                                    </tr>
                                    <tr>
                                        <td>9:00 am -1:00 pm</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                    </tr>
                                    <tr>
                                        <td>1-3:00 pm</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                    </tr>
                                    <tr>
                                        <td>3:6:00 pm</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                    </tr>
                                    <tr>
                                        <td>6-7:00 pm</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Por cerrar</td>
                                    </tr>
                                    <tr>
                                        <td>7:30 pm</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Abierto</td>
                                        <td class="selected">Por cerrar</td>
                                        <td>Cerrado</td>
                                    </tr>
                                    <tr>
                                        <td>8:30 pm</td>
                                        <td class="selected">Por cerrar</td>
                                        <td class="selected">Por cerrar</td>
                                        <td class="selected">Por cerrar</td>
                                        <td class="selected">Por cerrar</td>
                                        <td class="selected">Por cerrar</td>
                                        <td>Cerrado</td>
                                        <td>Cerrado</td>
                                    </tr>

                                </table>
                            </div>
                            <!-- Horarios de atención end -->

                <br>
                <br>
                            <!-- Ranking start -->
                            <div class="section">
                                <h1><span>Ranking</span></h1>
                                <ul>
                                    <li>Integra SA.<br />
                                        <progress min="0" max="100" value="85"></progress>
                                    </li>
                                    <li>SEOMX<br />
                                        <progress min="0" max="100" value="50"></progress>
                                    </li>
                                    <li>OTROS <br />
                                        <progress min="0" max="100" value="30"></progress>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ranking end -->
                <br>
                <br>

                            <!-- Media section start -->
                            <div class="section">
                                <h1> <svg class="face" height="100" width="100">
                                    <circle cx="50" cy="50" r="50" fill="#FDD835"/>
                                    <circle cx="30" cy="30" r="10" fill="#FFFFFF"/>
                                    <circle cx="70" cy="30" r="10" fill="#FFFFFF"/>
                                    <circle cx="30" cy="30" r="5" fill="#000000"/>
                                    <circle cx="70" cy="30" r="5" fill="#000000"/>
                                    <path d="M 30 70 q 20 20 40 0" stroke="#FFFFFF" stroke-width="5" fill="none" />
                                </svg></h1>
                                <iframe height="300" width="500"  src="https://st3.depositphotos.com/2572561/15836/v/600/depositphotos_158368844-stock-video-security-camera-n1-footage-of.mp4" allowfullscreen frameborder="0"></iframe>
                                <br>
                                <iframe height="300" width="500"  src="https://st2.depositphotos.com/1039729/9242/v/600/depositphotos_92420060-stock-video-suburban-home-custom-home-exterior.mp4" allowfullscreen frameborder="0"></iframe>
                            </div>
                            <!-- Media section end -->
                <br>
                <br>
                            <!-- Form section start -->
                            <div class="section">
                                <h1><span>Pide una cotización</span></h1>

                                <svg class="face" height="100" width="100">
                                    <circle cx="50" cy="50" r="50" fill="#FDD835"/>
                                    <circle cx="30" cy="30" r="10" fill="#FFFFFF"/>
                                    <circle cx="70" cy="30" r="10" fill="#FFFFFF"/>
                                    <circle cx="30" cy="30" r="5" fill="#000000"/>
                                    <circle cx="70" cy="30" r="5" fill="#000000"/>
                                    <path d="M 30 70 q 20 20 40 0" stroke="#FFFFFF" stroke-width="5" fill="none" />
                                </svg>
                            <br>
                                <form>
                                    <p>Proveedor De Sistemas De Seguridad en GDL <br>
                                        Abrimos a las 08:00</p>
                                    <br>
                                    <input name="name" placeholder="Name" type="text" required /><br/>
                                    <input name="num" placeholder="Numero de telefono"  required /><br/>
                                    <label>* Se requiere una dirección de correo electrónico válida.</label><br>
                                    <input name="email" placeholder="Email" type="email" required /><br/>
                                    <label>¿En qué podemos ayudarte?</label><br>
                                    <textarea name="text" placeholder="Quisiera obtener información acerca de la disponibilidad y tarifas. Necesito ayuda con lo siguiente:"></textarea>
                                    <input type="submit" value="SEND" class="submit" />

                                    <p> Asegúrate de evitar incluir cualquier información <br>
                                        confidencial que no desees compartir con esta empresa.</p>
                                </form>


                            </div>
                            <!-- Form section end -->

                            <!-- Contacts section start -->
                <br>
                <br>
                            <div class="section" id="contacts">
                                <h1><span>Contactanos</span></h1>
                                <div>
                                    <a href="#" target="_blank">
                                        <img alt="Whatsapp" src="https://cdn-icons.flaticon.com/png/512/3670/premium/3670051.png?token=exp=1660022532~hmac=e48c3118b1ec718441d0a5fd2d1fc74a" />
                                    </a>
                                    <a href="#">
                                        <img alt="Facebook" src="https://www.sololearn.com/Uploads/icons/facebook.png"/>
                                    </a>
                                    <a href="#">
                                        <img alt="Twitter" src="https://www.sololearn.com/Uploads/icons/twitter.png" />
                                    </a>
                                </div>
                            </div>



                        </div>

            </body>
        </div>

    </div>

@endsection





@push('js')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });

@endpush
