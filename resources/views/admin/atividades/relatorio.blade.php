@include('layout.includes.topo')

    <style media="screen">
        .col-lg {
            color: #9932CC;


        }

        .bg-roxo {

            background-color: #77418C;
        }

        .text-roxo {

            color: #77418C;
        }

        .fa-bars {
            color: #FFFFFF;
        }

        .fa-graduation-cap {
            color: #FFFFFF;

        }

        .fa-briefcase {
            color: #FFFFFF;

        }

        .fa-tools {
            color: #FFFFFF;

        }

        .fa-book-open {
            color: #FFFFFF;

        }

        .bolinha {

            width: 40px;
        }
    </style>
</head>

<body class="bg-dark">


    <div class="container  shadow-sm mt-3 bg-white">

        <div class="row bg-light rounded p-5">

            <div class="col-lg-8 p-3 ">

                <h3 class="ml-5 font-weight-light">Relatorio De atividades </h3>
            </div>


            <div class="col-lg text-right p-3">
                <div class="">

                    <i class="fas fa-print text-roxo"></i> para imprimir relatorio presione ctrl p 
                </div>
            </div>



        </div>

        <br/>


        <table class="table">

            <thead>
                <th>Data</th>
                <th>Atividade1</th>
                <th>Atividade2</th>
                <th>Atividade3</th>
            </thead>

            <tbody>
              
                @foreach ($registros as $registro)
            
                <tr>
                    <td>{{$registro->data}}</td>
                    <td>{{$registro->atividade1}}</td>
                    <td>{{$registro->atividade2}}</td>
                    <td>{{$registro->atividade3}}</td>
                    
                   
                </tr>
                @endforeach
        
               
            </tbody>

        



        </table>



    </div>



</body>

</html>