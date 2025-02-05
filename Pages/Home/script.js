document.addEventListener('DOMContentLoaded', function() {
  const modal = document.getElementById('reservationModal');
  const closeBtn = document.querySelector('.close');
  const confirmBtn = document.getElementById('confirmReservation');
  let selectedSpaceId = null;
  let selectedDate = null;

  // Abrir o modal e carregar o calendário ao clicar no botão "Reservar"
  document.querySelectorAll('.reservar-btn').forEach(button => {
    button.addEventListener('click', function() {
      selectedSpaceId = this.getAttribute('data-id'); // Pegando o ID do espaço
      modal.style.display = 'flex';
      loadMonthlyCalendar(selectedSpaceId); // Carregar o calendário mensal do espaço
    });
  });

  // Fechar o modal quando o botão "fechar" for clicado
  closeBtn.addEventListener('click', function() {
    modal.style.display = 'none';
  });

  // Fechar o modal se clicar fora dele
  window.addEventListener('click', function(event) {
    if (event.target == modal) {
      modal.style.display = 'none';
    }
  });

  // Confirmar a reserva
  confirmBtn.addEventListener('click', function() {
    if (selectedDate) {
      // Enviar a reserva para o servidor
      fetch(`../../Backend/Router/reservationRouter.php?acao=reservar&id_espaco=${selectedSpaceId}&data=${selectedDate}`)
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            alert('Reserva confirmada!');
            modal.style.display = 'none';
          } else {
            alert('Erro ao confirmar reserva.');
          }
        })
        .catch(error => {
          console.error('Erro ao confirmar reserva:', error);
          alert('Erro ao confirmar reserva.');
        });
    } else {
      alert('Por favor, selecione uma data.');
    }
  });

  // Função para carregar o calendário mensal com datas disponíveis
  function loadMonthlyCalendar(spaceId) {
    fetch(`../../Backend/Router/reservationRouter.php?acao=carregar&id_espaco=${spaceId}`)
      .then(response => response.json())
      .then(data => {
        const calendar = document.getElementById('calendar');
        calendar.innerHTML = ''; // Limpar o calendário antes de adicionar novos dias

        // Adicionar cabeçalho do calendário
        const header = document.createElement('div');
        header.classList.add('calendar-header');
        header.textContent = 'Calendário Mensal';
        calendar.appendChild(header);

        // Adicionar dias do mês
        data.dates.forEach(date => {
          const dayElement = document.createElement('div');
          dayElement.classList.add('calendar-day');
          dayElement.textContent = date.day;

          // Se o dia estiver reservado, marcar como reservado
          if (date.reserved) {
            dayElement.classList.add('reserved');
          } else {
            dayElement.classList.add('available');
            dayElement.addEventListener('click', function() {
              // Selecionar o dia
              document.querySelectorAll('.calendar-day').forEach(el => el.classList.remove('selected'));
              dayElement.classList.add('selected');
              selectedDate = date.date; // A data selecionada
            });
          }

          calendar.appendChild(dayElement);
        });
      })
      .catch(error => {
        console.error('Erro ao carregar o calendário:', error);
        alert('Erro ao carregar o calendário.');
      });
  }
});
