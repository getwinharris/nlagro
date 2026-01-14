/**
 * NNL Registration - Auto-fill Agent ID
 */
document.addEventListener('DOMContentLoaded', function() {
    // Get agent ID from cookie
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
        return null;
    }

    const agentId = getCookie('nnl_agent_id') || getCookie('nnl_ref_id');
    const agentIdField = document.getElementById('input-agent-id');

    if (agentId && agentIdField) {
        agentIdField.value = agentId;
    }
});
