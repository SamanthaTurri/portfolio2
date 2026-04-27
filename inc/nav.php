
<!-- TODO may need to add javascript to live refresh pip status between page loads -->

<nav id="primary-nav" aria-label="Primary">
  <section class="nav-section">
    <div class="nav-row">
      <h2>About</h2>
      <ul class="card-nav">
        <li class="card-nav-item">
          <a class="card exp-card" 
            href="#"
            aria-label="Enterprise Experience: Shopify"
            aria-haspopup="dialog"
            data-modal="modal-enterprise">
            <div class="card-header">
              <p class="org">Shopify</p>
              <div class="pip" data-status="<?php echo getPipStatus('shopify.php') ?>" aria-hidden="true"></div>
            </div>
            <p class="card-title">Enterprise experience</p>
            <div class="card-body">              
              <div class="roles">
                <p class="role">Developer</p>
                <p class="role">Technical Analyst</p>
                <p class="role">Escalated Support</p>
              </div>
            </div>
          </a>
        </li>

        <li class="card-nav-item">
          <a class="card exp-card" 
            href="#" 
            aria-label="Agency Experience: Goodsir" 
            data-modal="modal-agency">
            <div class="card-header">
              <p class="org">Goodsir</p>
              <div class="pip" data-status="<?php echo getPipStatus('goodsir.php') ?>" aria-hidden="true"></div>
            </div>
            <p class="card-title">Agency experience</p>
            <div class="card-body">
              <div class="roles">
                <p class="role">Senior Web Producer</p>
              </div>
              <p class="desc">Research, strategy, planning, client relations, project management</p>
            </div>
          </a>
        </li>

        <li class="card-nav-item">
          <a class="card exp-card" 
            href="#" 
            aria-label="Education: BCIT Front-End Web Developer Program" 
            data-modal="modal-education">
            <div class="card-header">
              <p class="org">BCIT</p>
              <div class="pip" data-status="<?php echo getPipStatus('bcit.php') ?>" aria-hidden="true"></div>
            </div>
            <p class="card-title">Graduate</p>
            <div class="card-body">
              <div class="roles">
                <p class="role">Front-End Web Developer</p>
              </div>
              <p class="desc">UX design, HTML, CSS, PHP, WordPress, WooCommerce, React</p>
            </div>
          </a>
        </li>

        <li class="card-nav-item">
          <a class="card exp-card" 
            href="#" 
            aria-label="About me as a human being" 
            data-modal="modal-human">
            <div class="card-header">
              <p class="org">British Columbia</p>
              <div class="pip" data-status="<?php echo getPipStatus('human.php') ?>" aria-hidden="true"></div>
            </div>
            <p class="card-title">Human being</p>
            <div class="card-body">
              <div class="roles">
                <p class="role">Myself</p>
              </div>
              <p class="desc">Computers, headphones, stages, opinions</p>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="nav-section">
    <div class="nav-row">
      <h2>Work</h2>
      <ul class="card-nav">
        <li class="card-nav-item">
          <a class="card work-card" 
            href="#" 
            aria-label="E-Commerce event sales project" 
            data-modal="modal-vancity">
            <div class="card-header">
              <p class="org">Vancity Food Tours</p>
              <div class="pip" data-status="<?php echo getPipStatus('vancity.php') ?>" aria-hidden="true"></div>
            </div>
            <p class="card-title">E-Commerce event sales</p>
            <div class="card-body">
              <div class="collaborators">
                <img class="collaborator" src="img/collaborators/samantha.png" alt="Samantha Turri">
                <img class="collaborator" src="img/collaborators/emily.png" alt="Emily Huang">
                <img class="collaborator" src="img/collaborators/michelle.png" alt="Michelle Nguyen">
              </div>
              <p class="desc">Planning, management, programming</p>
          </div>
          </a>
        </li>
      </ul>
    </div>
  </section>
</nav>