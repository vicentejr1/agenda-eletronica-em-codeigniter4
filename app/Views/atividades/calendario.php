<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">


            <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>

            <div class="container mt-4">
                <h2>Meu Calendário de Atividades</h2>
                <hr>

                <div id='calendario' style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);"></div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {

                    var calendarEl = document.getElementById('calendario');

                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'listMonth',
                        locale: 'pt-br',
                        headerToolbar: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'dayGridMonth,timeGridWeek,listWeek'
                        },
                        events: '<?= base_url('atividades/eventoscalendario') ?>'
                    });

                    calendar.render(); // Desenha o calendário na tela
                });
            </script>


        </div>
    </div><!-- /.container-fluid -->
</div>