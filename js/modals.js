document.addEventListener("DOMContentLoaded", () => {
  // Open modal on card click
  document.querySelectorAll("[data-modal]").forEach((trigger) => {
    trigger.addEventListener("click", (event) => {
      const modalName = trigger.dataset.modal;
      let pipName = `pip-${modalName.replace("modal-", "")}`;
      const pip = document.getElementById(pipName);
      if (pip) {
        pip.dataset.status = "inactive";
      }
      event.preventDefault(); // prevent navigation
      const modal = document.getElementById(trigger.dataset.modal);
      if (!modal) return;
      modal.showModal(); // native dialog method, handles focus + aria
      modal.focus(); // ensure focus is set to modal for screen readers
      modal.scrollTop = 0; // reset scroll position...this doesn't work on iOS
    });
  });

  // Close on close button
  document.querySelectorAll(".close").forEach((btn) => {
    btn.addEventListener("click", () => {
      btn.closest("dialog").close();
    });
  });

  // Close on backdrop click
  document.querySelectorAll("dialog").forEach((dialog) => {
    dialog.addEventListener("click", (event) => {
      if (event.target === dialog) {
        dialog.close();
      }
    });
  });
});
