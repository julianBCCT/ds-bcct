<?php $bodyClass= "cards"; include 'includes/head.php'; ?> 
<h2>Cards</h2>
<hr />
<section class="cards-grid">
  <div class="row">
    <h3>Horizontal</h3>
    <p>Sin imagen</p>
    <p>Con imagen</p>
  </div>
  <div class="row">
    <p>Sin acciones</p>
    <div class="card lg">
      <div class="card__header">
        <div class="card__header-title">Lorem Ipsum dolor sit amet</div>
        <div class="card__header-version">
          Última versión: <small>5.2</small>
        </div>
        <div class="card__header-actions">
          <button type="button">
            <img src="img/icons/options.svg" alt="" />
          </button>
        </div>
      </div>
      <div class="card__body">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
          enim ad minim veniam.
        </p>
      </div>
    </div>
    <div class="card w_image lg">
      <div class="card__img"></div>
      <div class="card_content">
        <div class="card__header">
          <div class="card__header-title">Lorem Ipsum dolor sit amet</div>
          <div class="card__header-version">
            Última versión: <small>5.2</small>
          </div>
          <div class="card__header-actions">
            <button type="button">
              <img src="img/icons/options.svg" alt="" />
            </button>
          </div>
        </div>
        <div class="card__body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <p>Con acción interna</p>
    <div class="card lg">
      <div class="card__header">
        <div class="card__header-title">Lorem Ipsum dolor sit amet</div>
        <div class="card__header-version">
          Última versión: <small>5.2</small>
        </div>
        <div class="card__header-actions">
          <a href="">Etiqueta</a>
          <button type="button">
            <img src="img/icons/options.svg" alt="" />
          </button>
        </div>
      </div>
      <div class="card__body">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
          enim ad minim veniam.
        </p>
      </div>
    </div>
    <div class="card w_image lg">
      <div class="card__img"></div>
      <div class="card_content">
        <div class="card__header">
          <div class="card__header-title">Lorem Ipsum dolor sit amet</div>
          <div class="card__header-version">
            Última versión: <small>5.2</small>
          </div>
          <div class="card__header-actions">
            <a href="">Etiqueta</a>
            <button type="button">
              <img src="img/icons/options.svg" alt="" />
            </button>
          </div>
        </div>
        <div class="card__body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <p>Con acciones</p>
    <div class="card lg">
      <div class="card__header">
        <div class="card__header-title">Lorem Ipsum dolor sit amet</div>
        <div class="card__header-version">
          Última versión: <small>5.2</small>
        </div>
        <div class="card__header-actions column">
          <button type="button" class="card__header-btn">Texto 1</button>
          <button type="button" class="card__header-btn">Texto 2</button>
        </div>
      </div>
      <div class="card__body">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
          enim ad minim veniam.
        </p>
      </div>
    </div>
    <div class="card w_image lg">
      <div class="card__img"></div>
      <div class="card_content">
        <div class="card__header">
          <div class="card__header-title">Lorem Ipsum dolor sit amet</div>
          <div class="card__header-version">
            Última versión: <small>5.2</small>
          </div>
          <div class="card__header-actions column">
            <button type="button" class="card__header-btn">
              Texto 1
            </button>
            <button type="button" class="card__header-btn">
              Texto 2
            </button>
          </div>
        </div>
        <div class="card__body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="cards-grid cols-5">
  <h3>Vertical</h3>
  <div class="row">
    <p>Sin imagen — Acciones</p>
    <p>Sin imagen — Acción interna</p>
    <p>Con imagen — Acciones</p>
    <p>Con imagen — Acción interna</p>
  </div>
  <div class="row">
    <div class="card sm">
      <div class="card__header">
        <div class="card__header-title">Lorem Ipsum dolor sit amet</div>
      </div>
      <div class="card__body">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
          enim ad minim veniam.
        </p>
      </div>
      <div class="card__actions column">
        <button type="button" class="card__actions-btn">Texto 1</button>
        <button type="button" class="card__actions-btn">Texto 2</button>
      </div>
    </div>
    <div class="card sm">
      <div class="card__header">
        <div class="card__header-title">Lorem Ipsum dolor sit amet</div>
      </div>
      <div class="card__body">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
          enim ad minim veniam.
        </p>
      </div>
      <div class="card__actions column">
        <a href="">Etiqueta</a>
      </div>
    </div>
    <div class="card sm w_image">
      <div class="card__img"></div>
      <div class="card__content">
        <div class="card__header">
          <div class="card__header-title">Lorem Ipsum dolor sit amet</div>
        </div>
        <div class="card__body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam.
          </p>
        </div>
        <div class="card__actions column">
          <button type="button" class="card__actions-btn">Texto 1</button>
          <button type="button" class="card__actions-btn">Texto 2</button>
        </div>
      </div>
    </div>
    <div class="card sm w_image">
      <div class="card__img"></div>
      <div class="card__content">
        <div class="card__header">
          <div class="card__header-title">Lorem Ipsum dolor sit amet</div>
        </div>
        <div class="card__body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam.
          </p>
        </div>
        <div class="card__actions column">
          <a href="">Etiqueta</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?> 