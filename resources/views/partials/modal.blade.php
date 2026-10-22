<!-- Plan My Trip / Custom Tour Modal -->
<div class="modal-overlay" id="planTripModal" role="dialog" aria-modal="true" aria-labelledby="modalHeading">
  <div class="modal-card">
    <button type="button" class="modal-close-btn" id="modalCloseBtn" aria-label="Close dialog">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round">
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
      </svg>
    </button>
    <h3 class="modal-title" id="modalHeading">Plan Your Sri Lanka Journey</h3>
    <p class="modal-subtitle">Tell us your dream holiday ideas and our local travel specialists will craft a bespoke itinerary.</p>

    <form id="planTripForm">
      <div class="form-group">
        <label class="form-label" for="planName">Your Full Name</label>
        <input type="text" id="planName" class="form-input" placeholder="e.g. Eleanor Vance" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="planEmail">Email Address</label>
        <input type="email" id="planEmail" class="form-input" placeholder="e.g. eleanor@example.com" required>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
        <div class="form-group">
          <label class="form-label" for="planDuration">Duration (Days)</label>
          <select id="planDuration" class="form-select">
            <option value="5-7">5 to 7 Days</option>
            <option value="8-10" selected>8 to 10 Days</option>
            <option value="11-14">11 to 14 Days</option>
            <option value="15+">15+ Days</option>
          </select>
        </div>

        <div class="form-group">
          <label class="form-label" for="planStyle">Travel Style</label>
          <select id="planStyle" class="form-select">
            <option value="luxury">Luxury & Boutique</option>
            <option value="wildlife">Wildlife & Safari</option>
            <option value="culture">Culture & Heritage</option>
            <option value="relaxation">Coast & Wellness</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label" for="planNotes">Special Wishes or Interests</label>
        <textarea id="planNotes" class="form-textarea" rows="3" placeholder="Tell us about destinations you love, dietary preferences, or specific experiences..."></textarea>
      </div>

      <button type="submit" class="btn-primary" style="width: 100%; justify-content: center; padding: 14px;">
        Submit Custom Itinerary Request
      </button>
    </form>
  </div>
</div>
