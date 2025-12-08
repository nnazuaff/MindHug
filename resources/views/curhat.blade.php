<x-layout :title="$title">
    <main class="bg-white flex items-center justify-center pt-0">
        <div class="mx-auto max-w7xl px-4 py-6 sm:px-6 lg:px-8">
              <!-- Container Chat -->
  <div class="w-full max-w-md h-[500px] bg-softBrown shadow-lg rounded-xl flex flex-col overflow-hidden">

    <!-- Area Chat -->
    <div id="chatBox" class="flex-1 p-4 overflow-y-auto space-y-3 bg-white">
      <!-- Contoh pesan bot -->
      <div class="flex justify-start">
        <div class="bg-softBrown text-black px-4 py-2 rounded-lg max-w-[75%]">
          Halo! Selamat datang di MindHug 💬
        </div>
      </div>
    </div>

    <!-- Input Chat -->
    <div class="flex items-center gap-2 p-3 bg-softBrown border-t border-darkBrown">
      <input 
        id="messageInput"
        type="text"
        placeholder="Tulis pesan..."
        class="flex-1 px-4 py-2 rounded-full border border-black focus:outline-none"
      >
      <button 
        onclick="sendMessage()"
        class="bg-darkBrown text-black px-5 py-2 rounded-full hover:opacity-80"
      >
        Kirim
      </button>
    </div>

  </div>

  <!-- Script Simulasi Chat -->
  <script>
    function sendMessage() {
      const input = document.getElementById('messageInput');
      const chatBox = document.getElementById('chatBox');
      const message = input.value.trim();

      if (message === '') return;

      // Bubble pesan user
      const messageDiv = document.createElement('div');
      messageDiv.className = "flex justify-end";
      messageDiv.innerHTML = `
        <div class="bg-darkBrown text-black px-4 py-2 rounded-lg max-w-[75%]">
          ${message}
        </div>
      `;
      chatBox.appendChild(messageDiv);

      // Auto scroll ke bawah
      chatBox.scrollTop = chatBox.scrollHeight;

      input.value = '';

      // Simulasi balasan bot
      setTimeout(() => {
        const botDiv = document.createElement('div');
        botDiv.className = "flex justify-start";
        botDiv.innerHTML = `
          <div class="bg-softBrown text-black px-4 py-2 rounded-lg max-w-[75%]">
            Terima kasih sudah mengirim pesan 🤍
          </div>
        `;
        chatBox.appendChild(botDiv);
        chatBox.scrollTop = chatBox.scrollHeight;
      }, 800);
    }
  </script>
        </div>
    </main>
</x-layout>
