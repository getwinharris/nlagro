/**
 * NNL AI Chat Widget
 * 24/7 Organic Leader Assistant
 */

let aiChatOpen = false;

function toggleAIChat() {
    const chatWidget = document.getElementById('nnl-ai-chat');
    if (aiChatOpen) {
        chatWidget.classList.remove('active');
        aiChatOpen = false;
    } else {
        chatWidget.classList.add('active');
        aiChatOpen = true;
        // Focus on input
        document.getElementById('ai-chat-input').focus();
    }
}

function sendAIMessage() {
    const input = document.getElementById('ai-chat-input');
    const message = input.value.trim();

    if (!message) return;

    // Add user message to chat
    addMessage('user', message);
    input.value = '';

    // Show loading
    const loadingId = addMessage('assistant', 'Thinking...', true);

    // Send to API
    fetch('index.php?route=api/nnl_ai', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ query: message })
    })
    .then(response => response.json())
    .then(data => {
        // Remove loading message
        const loadingEl = document.getElementById(loadingId);
        if (loadingEl) loadingEl.remove();

        if (data.success) {
            addMessage('assistant', data.response);
        } else {
            addMessage('assistant', 'Sorry, I encountered an error. Please try again later.');
        }
    })
    .catch(error => {
        const loadingEl = document.getElementById(loadingId);
        if (loadingEl) loadingEl.remove();
        addMessage('assistant', 'Connection error. Please check your internet connection.');
    });
}

function addMessage(type, text, isLoading = false) {
    const messagesContainer = document.getElementById('ai-chat-messages');
    const messageId = 'msg-' + Date.now();
    const messageEl = document.createElement('div');
    messageEl.id = messageId;
    messageEl.className = `message ${type}`;
    messageEl.textContent = text;

    if (isLoading) {
        messageEl.classList.add('loading');
    }

    messagesContainer.appendChild(messageEl);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;

    return messageId;
}

// Enter key to send
document.addEventListener('DOMContentLoaded', function() {
    const input = document.getElementById('ai-chat-input');
    if (input) {
        input.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendAIMessage();
            }
        });
    }

    // Load home page widgets
    loadHomeWidgets();
});

// Load Bento Grid Widgets
function loadHomeWidgets() {
    // Load top exports
    fetch('index.php?route=api/nnl_exports&language=' + (document.documentElement.lang || 'en-gb'))
        .then(r => r.json())
        .then(data => {
            if (data.success && data.products) {
                const container = document.getElementById('nnl-exports-preview');
                if (container) {
                    container.innerHTML = data.products.slice(0, 3).map(p => `
                        <div class="text-sm text-gray-600">• ${p.name} - ₹${p.price}</div>
                    `).join('');
                }
            }
        })
        .catch(e => console.error('Error loading exports:', e));

    // Load investments
    fetch('index.php?route=api/nnl_investments&language=' + (document.documentElement.lang || 'en-gb'))
        .then(r => r.json())
        .then(data => {
            if (data.success && data.investments) {
                const container = document.getElementById('nnl-investments-preview');
                if (container) {
                    container.innerHTML = data.investments.slice(0, 2).map(i => `
                        <div class="text-sm text-gray-600">• ${i.product_name} - ₹${i.amount}</div>
                    `).join('');
                }
            }
        })
        .catch(e => console.error('Error loading investments:', e));

    // Load leaderboard
    fetch('index.php?route=api/nnl_leaderboard&language=' + (document.documentElement.lang || 'en-gb'))
        .then(r => r.json())
        .then(data => {
            if (data.success && data.agents) {
                const container = document.getElementById('nnl-leaderboard-preview');
                if (container) {
                    container.innerHTML = data.agents.slice(0, 3).map((a, i) => `
                        <div class="text-sm text-gray-600">#${i+1} ${a.name} - ₹${a.commission}</div>
                    `).join('');
                }
            }
        })
        .catch(e => console.error('Error loading leaderboard:', e));
}
