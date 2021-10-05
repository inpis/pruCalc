<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Prudential Calculator App</title>
    <!-- <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <!-- <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,600&display=swap"
      rel="stylesheet"
    /> -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Open+Sans:italic,300,400,600,700&amp;display=swap"
    />
    <link rel="stylesheet" href="/public/css/components.min.css" />
    <link
      rel="stylesheet"
      href="/public/libs/bootstrap-slider/bootstrap-slider.min.css"
    />
    <link rel="stylesheet" href="/public/css/main.min.css" />
    <link rel="stylesheet" href="/public/css/media.min.css" />
        <!-- Start: Favicon-->
        <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/public/assets/resources/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/public/assets/resources/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="/public/assets/resources/favicon-16x16.png"
    />
    <link rel="manifest" href="/public/assets/resources/site.webmanifest" />
    <link
      rel="mask-icon"
      href="/public/assets/resources/safari-pinned-tab.svg"
      color="#5bbad5"
    />
    <meta name="msapplication-TileColor" content="#ffc40d" />
    <meta name="theme-color" content="#ffffff" />
    <!-- End: Favicon-->
  </head>
  <body class="shrinked">
    <!-- inject:header:html -->
    
    <!-- endinject -->
    <header class="main-header">
      <div class="main-header__top">
        <div class="container">
          <div class="main-header__content">
            <div class="main-header__logo-wrap">
              <a href="/">
                <img
                  src="/public/assets/logo.png"
                  alt="logo"
                  class="main-header__logo"
                />
              </a>
            </div>
            <div class="d-flex align-items-center">
              <div class="main-header__content-right">
                <div class="main-header__control-btn-wrap">
                  <a
                    class="main-header__control-btn main-header__search-btn"
                    href="#"
                    data-panel="search"
                  >
                    <i class="i-icon i-icon-search"></i>
                  </a>
                </div>
                <div class="main-header__control-btn-wrap">
                  <a
                    class="main-header__control-btn main-header__languages-btn"
                    href="#"
                    data-panel="language"
                  >
                    <i class="i-icon i-icon-language"></i>
                    <span>EN</span>
                  </a>
                </div>
                <div class="main-header__control-btn-wrap">
                  <a
                    class="main-header__control-btn main-header__contact-btn"
                    href="#"
                  >
                    <i class="i-icon i-icon-contact-chat"></i>
                  </a>
                </div>
              </div>
              <button class="main-header__mobile-burger">
                <div class="i-icon i-icon-burger"></div>
                <div class="i-icon i-icon-close"></div>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="main-header__bottom">
        <div class="container">
          <div class="main-header__nav-wrap">
            <nav class="main-header__nav">
              <ul class="main-header__nav-menu">
                <li class="main-header__nav-menu-item">
                  <a
                    href="#"
                    class="main-header__nav-menu-link dropdown"
                    data-panel="1"
                  >
                    We Do Dance
                  </a>
                </li>
                <li class="main-header__nav-menu-item">
                  <a
                    href="#"
                    class="main-header__nav-menu-link dropdown"
                    data-panel="2"
                  >
                    We Do Pulse
                  </a>
                </li>
                <li class="main-header__nav-menu-item">
                  <a
                    href="#"
                    class="main-header__nav-menu-link dropdown"
                    data-panel="3"
                  >
                    Products
                  </a>
                </li>
                <li class="main-header__nav-menu-item">
                  <a
                    href="#"
                    class="main-header__nav-menu-link dropdown"
                    data-panel="4"
                  >
                    Claims & Services
                  </a>
                </li>
                <li class="main-header__nav-menu-item">
                  <a
                    href="#"
                    class="main-header__nav-menu-link dropdown"
                    data-panel="5"
                  >
                    Work with Us
                  </a>
                </li>
                <li class="main-header__nav-menu-item">
                  <a
                    href="#"
                    class="main-header__nav-menu-link dropdown"
                    data-panel="6"
                  >
                    About Us
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="main-header__overlay-panel">
            <div class="main-header__overlay-panel-content">
              <div class="main-header__overlay-panel-inner">
                <div class="panel-content d-none" data-panel="1">
                  <div class="row">
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/dance-for-wellness/" class="main-header__overlay-panel-link">
                          <span>Dance for Wellness</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/prudential-x-superm/" class="main-header__overlay-panel-link">
                          <span>Prudential x SuperM</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/join-the-virtual-concert/" class="main-header__overlay-panel-link">
                          <span>Join the virtual concert</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/join-the-dance-challenge/superm-dance-tutorials/" class="main-header__overlay-panel-link">
                          <span>Videos</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-content d-none" data-panel="2">
                  <div class="row">
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/we-do-pulse/" class="main-header__overlay-panel-link">
                          <span>Explore Pulse</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/we-do-pulse/health-and-wellness/" class="main-header__overlay-panel-link">
                          <span>Health and wellness articles</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-content d-none" data-panel="3">
                  <div class="row">
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/life-insurance/" class="main-header__overlay-panel-link">
                          <span>Life insurance</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                      <div>
                        <ul class="main-header__overlay-panel-menu">
                          <li>
                            <a href="https://www.prudential.la/corp/prudential-la/en/life-insurance/prulife-saver/">PRULife Saver</a>
                          </li>
                          <li>
                            <a href="https://www.prudential.la/corp/prudential-la/en/life-insurance/prubright-family/">PRUBright Family</a>
                          </li>
                          <li>
                            <a href="https://www.prudential.la/corp/prudential-la/en/life-insurance/prudream-protector/">PRUDream Protector</a>
                          </li>
                          <li>
                            <a href="https://www.prudential.la/corp/prudential-la/en/life-insurance/prudengue/">PRUDengue</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/guide-to-insurance/" class="main-header__overlay-panel-link">
                          <span>Guide to insurance</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-content d-none" data-panel="4">
                  <div class="row">
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/claims/" class="main-header__overlay-panel-link">
                          <span>Claims</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/policy-payment/" class="main-header__overlay-panel-link">
                          <span>Policy and payment</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/support/" class="main-header__overlay-panel-link">
                          <span>Support</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-content d-none" data-panel="5">
                  <div class="row">
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/why-work-with-prudential/" class="main-header__overlay-panel-link">
                          <span>Why work with us</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/why-work-with-prudential/our-team/" class="main-header__overlay-panel-link">
                          <span>Our team</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/why-work-with-prudential/graduates-and-students/" class="main-header__overlay-panel-link">
                          <span>Graduates and students</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/why-work-with-prudential/career-help/" class="main-header__overlay-panel-link">
                          <span>Career help</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-content d-none" data-panel="6">
                  <div class="row">
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/about-prudential-laos/" class="main-header__overlay-panel-link">
                          <span>Prudential Laos</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/newsroom/" class="main-header__overlay-panel-link">
                          <span>Newsroom</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div>
                        <a href="https://www.prudential.la/corp/prudential-la/en/corporate-social-responsibility/" class="main-header__overlay-panel-link">
                          <span>Corporate social responsibility</span>
                          <span class="i-icon i-icon-arrow-right"></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="panel-content panel-content--search d-none"
                  data-panel="search"
                >
                  <div class="panel-content__flex">
                    <div class="panel-content__title">
                      What can we help you find?
                    </div>
                    <div class="panel-content__content">
                      <form
                        id="searchForm"
                        class="panel-search-form"
                        action="/"
                      >
                        <div class="panel-search-form__content">
                          <button
                            id="searchFormSubmit"
                            class="panel-search-form__submit-btn"
                            type="submit"
                          >
                            <i class="i-icon i-icon-search"></i>
                          </button>
                          <button
                            id="searchFormClear"
                            class="panel-search-form__clear-btn"
                            type="button"
                          >
                            <i class="i-icon i-icon-close"></i>
                          </button>
                          <input
                            id="searchFormInput"
                            class="panel-search-form__input"
                            type="text"
                            name="keyword"
                            placeholder="Search by product, service and more"
                            title="Search by product, service and more"
                            autocomplete="off"
                          />
                        </div>
                      </form>
                    </div>
                    <a class="panel-content__btn-close" href="#" title="close">
                      <i class="i-icon i-icon-close"></i>
                      <span class="btn-text">Cancel</span>
                    </a>
                  </div>
                </div>
                <div
                  class="panel-content panel-content--language d-none"
                  data-panel="language"
                >
                  <div class="panel-content__flex">
                    <div class="panel-content__title">Select your language</div>
                    <div class="panel-content__content">
                      <a
                        class="language__item-btn active"
                        href="/"
                        title="English"
                      >
                        English
                      </a>
                      <a class="language__item-btn" href="/la/" title="ລາວ">
                        ລາວ
                      </a>
                    </div>
                    <a class="panel-content__btn-close" href="#" title="close">
                      <i class="i-icon i-icon-close"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="main-header__overlay-backdrop"></div>
        </div>
      </div>
    </header>
    <main class="main-content">
      <div class="container">
        <div id="startScreen" class="start-screen">
          <div class="row">
            <div class="col-lg-6">
              <h1 class="start-screen__title">
                The Prudential Protection Calculator
              </h1>
              <div class="start-screen__content">
                <p>
                  Find out how you and your loved ones will receive financial
                  care for the future.
                </p>
                <p>
                  Everyone has a unique protection number. Complete this
                  calculator to find out yours
                </p>
              </div>
              <div class="start-screen__controls">
                <div class="start-screen__control-item">
                  <button type="button" id="startBtn" class="ty-button">
                    Calculate Now
                  </button>
                </div>
                <div class="mt-3">
                  <div>
                    <label class="custom-checkbox-container">
                      <span class="custom-checkbox__text">
                        I hereby declare and confirm that I have read and agreed
                        to all of the contents in the
                        <a href="https://www.prudential.la/corp/prudential-la/en/privacy-notice/" target="_blank">"Privacy Notice"</a>
                      </span>
                      <input
                        id="form_privacy_agreed"
                        type="checkbox"
                        checked="checked"
                      />
                      <span class="custom-checkbox__checkmark"></span>
                    </label>
                  </div>
                  <div>
                    <label class="custom-checkbox-container">
                      <span class="custom-checkbox__text">
                        I agree to the provision and use of my personal data by
                        Prudential Life Assurance (Lao) Company Limited
                        ("Prudential") for direct marketing purposes in
                        accordance with Section C of Prudential's "Privacy Notice" *
                      </span>
                      <input
                        id="form_personal_agreed"
                        type="checkbox"
                        checked="checked"
                      />
                      <span class="custom-checkbox__checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="start-screen__footer">
                <div class="start-screen__footer-content">
                  PLAL reserve the right to save and use your data. for further
                  information please visit
                </div>
                <div class="start-screen__footer-legal">
                  <ul class="start-screen__legal-menu">
                    <li class="start-screen__legal-menu-item">
                      <a href="https://www.prudential.la/corp/prudential-la/en/privacy-notice/"> Privacy Notice </a>
                    </li>
                    <li class="start-screen__legal-menu-item">
                      <a href="https://www.prudential.la/corp/prudential-la/lo/"> Prudential Laos </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
              <div class="start-screen__splash-wrap">
                <img
                  src="/public/assets/start.png"
                  alt="pic"
                  class="start-screen__splash"
                />
              </div>
            </div>
          </div>
        </div>
        <div id="stepperScreen" class="stepper d-none">
          <div class="stepper__header">
            <div class="stepper__title" data-step="1">
              Let's Start! Tell us about yourself
            </div>
            <div class="stepper__title d-none" data-step="2">
              Next, we want to know your financial resources
            </div>
            <div class="stepper__title d-none" data-step="3">
              Almost there! Understanding your expenses and debts
            </div>
            <div class="stepper__title d-none" data-step="4">
              Done! Here’s our calculation
            </div>
          </div>
          <div class="stepper__bullets">
            <div class="stepper__bullets-item completed">
              <div class="stepper__bullets-item-counter">1</div>
            </div>
            <div class="stepper__bullets-item active">
              <div class="stepper__bullets-item-counter">2</div>
            </div>
            <div class="stepper__bullets-item">
              <div class="stepper__bullets-item-counter">3</div>
            </div>
            <div class="stepper__bullets-item">
              <div class="stepper__bullets-item-counter">4</div>
            </div>
          </div>
          <form
            id="calculatorForm"
            class="calculator-form ajax-contact-form"
            action="/api/handler.php"
            method="POST"
          >
            <div class="stepper__content">
              <div class="stepper__step stepper__step-1">
                <div class="field-wrapper">
                  <div class="field-label-wrap">
                    <div>
                      <div>
                        <label
                          for="f_name"
                          class="field-label field-label--required"
                        >
                          Name
                        </label>
                      </div>
                      <div class="input-error-text">Field required</div>
                    </div>
                  </div>
                  <div class="w-100">
                    <input id="f_name" name="name" type="text" class="field" />
                  </div>
                </div>
                <div class="field-wrapper">
                  <div class="field-label-wrap">
                    <div>
                      <div>
                        <label class="field-label field-label--required">
                          Gender
                        </label>
                      </div>
                      <div class="input-error-text">Field required</div>
                    </div>
                    <button
                      type="button"
                      id="viewGenderChartBtn"
                      class="view-chart-btn"
                    >
                      <i class="icon-view_chart"></i>
                    </button>
                  </div>
                  <div class="field-radio-container">
                    <div class="field-radio-wrapper">
                      <label for="f_gender_male" class="field-radio-label">
                        <input
                          id="f_gender_male"
                          type="radio"
                          name="gender"
                          value="Male"
                          class="field-radio"
                        />
                        <span>Male</span>
                      </label>
                    </div>
                    <div class="field-radio-wrapper">
                      <label for="f_gender_female" class="field-radio-label">
                        <input
                          id="f_gender_female"
                          type="radio"
                          name="gender"
                          value="Female"
                          class="field-radio"
                        />
                        <span>Female</span>
                      </label>
                    </div>
                    <div class="field-radio-wrapper">
                      <label for="f_gender_other" class="field-radio-label">
                        <input
                          id="f_gender_other"
                          type="radio"
                          name="gender"
                          value="Other"
                          class="field-radio"
                        />
                        <span>Other</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="field-wrapper">
                  <div class="field-label-wrap">
                    <div>
                      <div>
                        <label
                          for="f_age"
                          class="field-label field-label--required"
                        >
                          Age
                        </label>
                      </div>
                      <div class="input-error-text">Field required</div>
                    </div>
                    <button
                      type="button"
                      id="viewAgeChartBtn"
                      class="view-chart-btn"
                    >
                      <i class="icon-view_chart"></i>
                    </button>
                  </div>
                  <div
                    class="field-double-container field-number-and-range-wrap"
                  >
                    <div class="field-double__item">
                      <div class="field-number-wrap">
                        <button type="button" class="field-number-minus">
                          -
                        </button>
                        <input
                          id="f_age"
                          name="age"
                          type="number"
                          class="field-number"
                          min="0"
                          max="100"
                          value="20"
                        />
                        <button type="button" class="field-number-plus">
                          +
                        </button>
                      </div>
                    </div>
                    <div class="field-double__item w-100">
                      <div class="custom-range-input-wrap">
                        <input
                          type="text"
                          class="custom-range-input custom-range-input__age"
                          data-bslider-min="0"
                          data-bslider-value="20"
                        />
                      </div>
                      <!-- <input
                        type="range"
                        min="0"
                        max="100"
                        value="20"
                        class="field-range"
                      /> -->
                    </div>
                  </div>
                </div>
                <div class="field-wrapper">
                  <div class="field-label-wrap">
                    <div>
                      <div>
                        <label
                          for="f_phone"
                          class="field-label field-label--required"
                        >
                          Contact Number
                        </label>
                      </div>
                      <div class="input-error-text">Field required</div>
                    </div>
                  </div>
                  <div class="field-wrap">
                    <input
                      id="f_phone"
                      name="phone"
                      type="tel"
                      value="+856 "
                      class="field phone-input-mask"
                    />
                  </div>
                </div>
                <div class="field-wrapper">
                  <div class="field-label-wrap">
                    <div>
                      <div>
                        <label
                          for="f_residence"
                          class="field-label field-label--required"
                        >
                          Where do you currently live?
                        </label>
                      </div>
                      <div class="input-error-text">Field required</div>
                    </div>
                    <button
                      type="button"
                      id="viewResidenceChartBtn"
                      class="view-chart-btn"
                    >
                      <i class="icon-view_chart"></i>
                    </button>
                  </div>
                  <div class="field-select-wrap">
                    <select id="f_residence" class="field-select custom-select">
                      <option value="" selected>-- Select --</option>
                      <option value="Vientiane Capital">
                        Vientiane Capital
                      </option>
                      <option value="Vientiane">Vientiane</option>
                      <option value="Savannakhet">Savannakhet</option>
                      <option value="Champasack">Champasack</option>
                      <option value="Luangprabang">Luangprabang</option>
                      <option value="Khammuane">Khammuane</option>
                      <option value="Bokeo">Bokeo</option>
                      <option value="Borikhamxay">Borikhamxay</option>
                      <option value="Huaphanh">Huaphanh</option>
                      <option value="Luangnamtha">Luangnamtha</option>
                      <option value="Oudomxay">Oudomxay</option>
                      <option value="Phongsaly">Phongsaly</option>
                      <option value="Saravanh">Saravanh</option>
                      <option value="Xayabury">Xayabury</option>
                      <option value="Xaysomboon">Xaysomboon</option>
                      <option value="Xiengkhuang">Xiengkhuang</option>
                      <option value="Sekong">Sekong</option>
                      <option value="Attapeu">Attapeu</option>
                    </select>
                    <i class="field-select__icon-after icon-caret"></i>
                  </div>
                </div>
                <div class="field-wrapper">
                  <div class="field-label-wrap">
                    <div>
                      <div>
                        <label class="field-label field-label--required">
                          Marital Status
                        </label>
                      </div>
                      <div class="input-error-text">Field required</div>
                    </div>
                    <button
                      type="button"
                      id="viewMaritalChartBtn"
                      class="view-chart-btn"
                    >
                      <i class="icon-view_chart"></i>
                    </button>
                  </div>
                  <div class="field-radio-container">
                    <div class="field-radio-wrapper">
                      <label for="f_marital_single" class="field-radio-label">
                        <input
                          id="f_marital_single"
                          type="radio"
                          name="marital_status"
                          value="Single"
                          class="field-radio"
                        />
                        <span>Single</span>
                      </label>
                    </div>
                    <div class="field-radio-wrapper">
                      <label for="f_marital_married" class="field-radio-label">
                        <input
                          id="f_marital_married"
                          type="radio"
                          name="marital_status"
                          value="Married"
                          class="field-radio"
                        />
                        <span>Married</span>
                      </label>
                    </div>
                    <div class="field-radio-wrapper">
                      <label for="f_marital_widowed" class="field-radio-label">
                        <input
                          id="f_marital_widowed"
                          type="radio"
                          name="marital_status"
                          value="Widowed"
                          class="field-radio"
                        />
                        <span>Widowed</span>
                      </label>
                    </div>
                    <div class="field-radio-wrapper">
                      <label for="f_marital_divorced" class="field-radio-label">
                        <input
                          id="f_marital_divorced"
                          type="radio"
                          name="marital_status"
                          value="Divorced"
                          class="field-radio"
                        />
                        <span>Divorced</span>
                      </label>
                    </div>
                    <div class="field-radio-wrapper">
                      <label for="f_marital_other" class="field-radio-label">
                        <input
                          id="f_marital_other"
                          type="radio"
                          name="marital_status"
                          value="Other"
                          class="field-radio"
                        />
                        <span>Other</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="field-wrapper">
                  <div class="field-label-wrap">
                    <div>
                      <div>
                        <label for="f_children" class="field-label">
                          Do you have children?
                        </label>
                      </div>
                      <div class="input-error-text">Field required</div>
                    </div>
                  </div>
                  <div
                    class="field-double-container field-number-and-list-wrap"
                  >
                    <div class="field-double__item">
                      <div class="field-number-wrap">
                        <button type="button" class="field-number-minus">
                          -
                        </button>
                        <input
                          id="f_children"
                          name="childrens"
                          type="number"
                          class="field-number"
                          min="0"
                          max="10"
                          value="0"
                        />
                        <button type="button" class="field-number-plus">
                          +
                        </button>
                      </div>
                    </div>
                    <div class="field-double__item">
                      <ul class="icon-list" data-icon="icon-child">
                        <!-- <li class="icon-list__item">
                          <i class="icon-child"></i>
                        </li> -->
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="field-wrapper">
                  <div class="field-label-wrap">
                    <div>
                      <div>
                        <label
                          for="f_dependent"
                          class="field-label field-label--column"
                        >
                          Do you have other dependents?
                        </label>
                        <div>
                          <small>Parents, Siblings, Grandparents</small>
                        </div>
                      </div>
                      <div class="input-error-text">Field required</div>
                    </div>
                  </div>
                  <div
                    class="field-double-container field-number-and-list-wrap"
                  >
                    <div class="field-double__item">
                      <div class="field-number-wrap">
                        <button type="button" class="field-number-minus">
                          -
                        </button>
                        <input
                          id="f_dependent"
                          name="dependents"
                          type="number"
                          class="field-number"
                          min="0"
                          max="10"
                          value="0"
                        />
                        <button type="button" class="field-number-plus">
                          +
                        </button>
                      </div>
                    </div>
                    <div class="field-double__item">
                      <ul class="icon-list" data-icon="icon-person">
                        <!-- <li class="icon-list__item">
                          <i class="icon-person"></i>
                        </li> -->
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="field-wrapper">
                  <div class="field-label-wrap">
                    <div>
                      <div>
                        <label class="field-label field-label--required">
                          Do you have any life insurance?
                        </label>
                      </div>
                      <div class="input-error-text">Field required</div>
                    </div>
                  </div>
                  <div class="field-radio-container">
                    <div class="field-radio-wrapper">
                      <label
                        for="f_life_insuranced_yes"
                        class="field-radio-label"
                      >
                        <input
                          id="f_life_insuranced_yes"
                          type="radio"
                          name="life_insuranced"
                          value="Yes"
                          class="field-radio"
                        />
                        <span>Yes</span>
                      </label>
                    </div>
                    <div class="field-radio-wrapper">
                      <label
                        for="f_life_insuranced_no"
                        class="field-radio-label"
                      >
                        <input
                          id="f_life_insuranced_no"
                          type="radio"
                          name="life_insuranced"
                          value="No"
                          class="field-radio"
                        />
                        <span>No</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="stepper__step stepper__step-2 d-none">
                <div class="field-wrapper field-wrapper--vertical">
                  <div class="field-label-wrap">
                    <label for="f_salary" class="field-label">
                      <i class="field-label__icon icon-salary"></i>
                      <span>What is your basic monthly salary?</span>
                    </label>
                  </div>
                  <div
                    class="field-double-container field-currency-and-range-wrap"
                  >
                    <div class="field-double__item">
                      <div class="field-currency-wrap">
                        <input
                          id="f_salary"
                          type="text"
                          name="salary"
                          value="1000000"
                          class="field-currency"
                          data-min="50000"
                          inputmode="numeric"
                        />
                      </div>
                    </div>
                    <div class="field-double__item w-100">
                      <div class="custom-range-input-wrap">
                        <input
                          type="text"
                          class="
                            custom-range-input custom-range-input__currency
                          "
                          data-bslider-min="50000"
                          data-bslider-value="1000000"
                        />
                      </div>
                      <!-- <input
                        type="range"
                        min="50000"
                        max="100000000"
                        step="100000"
                        value="1000000"
                        class="field-range"
                      /> -->
                    </div>
                  </div>
                </div>
                <div class="field-wrapper field-wrapper--vertical">
                  <div class="field-label-wrap">
                    <label for="f_other_income" class="field-label">
                      <i class="field-label__icon icon-time"></i>
                      <span>
                        Do you have any other monthly income?
                        <i>
                          (Investments, Part-time Job, Interest Savings, etc.)
                        </i>
                      </span>
                    </label>
                  </div>
                  <div
                    class="field-double-container field-currency-and-range-wrap"
                  >
                    <div class="field-double__item">
                      <div class="field-currency-wrap">
                        <input
                          id="f_other_income"
                          type="text"
                          name="other_income"
                          value="1000000"
                          class="field-currency"
                          data-min="50000"
                          inputmode="numeric"
                        />
                      </div>
                    </div>
                    <div class="field-double__item w-100">
                      <div class="custom-range-input-wrap">
                        <input
                          type="text"
                          class="
                            custom-range-input custom-range-input__currency
                          "
                          data-bslider-min="50000"
                          data-bslider-value="1000000"
                        />
                      </div>
                      <!-- <input
                        type="range"
                        min="50000"
                        max="100000000"
                        step="100000"
                        value="1000000"
                        class="field-range"
                      /> -->
                    </div>
                  </div>
                </div>
                <div class="field-wrapper field-wrapper--vertical">
                  <div class="field-label-wrap">
                    <label for="f_savings" class="field-label">
                      <i class="field-label__icon icon-savings"></i>
                      <span> How much savings do you currently have? </span>
                    </label>
                  </div>
                  <div
                    class="field-double-container field-currency-and-range-wrap"
                  >
                    <div class="field-double__item">
                      <div class="field-currency-wrap">
                        <input
                          id="f_savings"
                          type="text"
                          name="savings"
                          value="1000000"
                          class="field-currency"
                          data-min="50000"
                          inputmode="numeric"
                        />
                      </div>
                    </div>
                    <div class="field-double__item w-100">
                      <div class="custom-range-input-wrap">
                        <input
                          type="text"
                          class="
                            custom-range-input custom-range-input__currency
                          "
                          data-bslider-min="50000"
                          data-bslider-value="1000000"
                        />
                      </div>
                      <!-- <input
                        type="range"
                        min="50000"
                        max="100000000"
                        step="100000"
                        value="1000000"
                        class="field-range"
                      /> -->
                    </div>
                  </div>
                </div>
                <div class="field-wrapper field-wrapper--vertical">
                  <div class="field-label-wrap">
                    <label for="f_insurance_covers" class="field-label">
                      <i class="field-label__icon icon-insurance"></i>
                      <span>
                        What is your current life insurance coverage?
                      </span>
                    </label>
                  </div>
                  <div
                    class="field-double-container field-currency-and-range-wrap"
                  >
                    <div class="field-double__item">
                      <div class="field-currency-wrap">
                        <input
                          id="f_insurance_covers"
                          type="text"
                          name="insurance_covers"
                          value="0"
                          class="field-currency"
                          inputmode="numeric"
                        />
                      </div>
                    </div>
                    <div class="field-double__item w-100">
                      <div class="custom-range-input-wrap">
                        <input
                          type="text"
                          class="
                            custom-range-input custom-range-input__currency-big
                          "
                          data-bslider-min="0"
                          data-bslider-value="0"
                        />
                      </div>
                      <!-- <input
                        type="range"
                        min="0"
                        max="100000000"
                        step="100000"
                        value="1000000"
                        class="field-range"
                      /> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="stepper__step stepper__step-3 d-none">
                <div class="field-wrapper field-wrapper--vertical">
                  <div class="field-label-wrap">
                    <label for="f_expenses" class="field-label">
                      <i class="field-label__icon icon-receipt"></i>
                      <span class="d-block">
                        <span class="d-block">
                          What is your monthly expenses?
                        </span>
                        <small class="d-block">
                          <i>
                            Such as food, utilities bill, travel, household
                            items, entertainment, etc.
                          </i>
                        </small>
                      </span>
                    </label>
                  </div>
                  <div
                    class="field-double-container field-currency-and-range-wrap"
                  >
                    <div class="field-double__item">
                      <div class="field-currency-wrap">
                        <input
                          id="f_expenses"
                          type="text"
                          name="expenses"
                          value="1000000"
                          class="field-currency"
                          data-min="50000"
                          inputmode="numeric"
                        />
                      </div>
                    </div>
                    <div class="field-double__item w-100">
                      <div class="custom-range-input-wrap">
                        <input
                          type="text"
                          class="
                            custom-range-input custom-range-input__currency
                          "
                          data-bslider-min="50000"
                          data-bslider-value="1000000"
                        />
                      </div>
                      <!-- <input
                        type="range"
                        min="50000"
                        max="100000000"
                        step="100000"
                        value="1000000"
                        class="field-range"
                      /> -->
                    </div>
                  </div>
                </div>
                <div class="field-wrapper field-wrapper--vertical">
                  <div class="field-label-wrap">
                    <label for="f_loans" class="field-label">
                      <i class="field-label__icon icon-loan"></i>
                      <span>
                        Do you have outstanding personal loan?
                      </span>
                    </label>
                  </div>
                  <div
                    class="field-double-container field-currency-and-range-wrap"
                  >
                    <div class="field-double__item">
                      <div class="field-currency-wrap">
                        <input
                          id="f_loans"
                          type="text"
                          name="loans"
                          value="0"
                          class="field-currency"
                          inputmode="numeric"
                        />
                      </div>
                    </div>
                    <div class="field-double__item w-100">
                      <div class="custom-range-input-wrap">
                        <input
                          type="text"
                          class="
                            custom-range-input custom-range-input__currency-big
                          "
                          data-bslider-min="0"
                          data-bslider-value="0"
                        />
                      </div>
                      <!-- <input
                        type="range"
                        min="0"
                        max="100000000"
                        step="100000"
                        value="1000000"
                        class="field-range"
                      /> -->
                    </div>
                  </div>
                </div>
                <div class="field-wrapper field-wrapper--vertical">
                  <div class="field-label-wrap">
                    <label for="f_insurance_cost" class="field-label">
                      <i class="field-label__icon icon-monthly"></i>
                      <span>
                        How much do you pay for premium per month?
                      </span>
                    </label>
                  </div>
                  <div
                    class="field-double-container field-currency-and-range-wrap"
                  >
                    <div class="field-double__item">
                      <div class="field-currency-wrap">
                        <input
                          id="f_insurance_cost"
                          type="text"
                          name="insurance_cost"
                          value="0"
                          class="field-currency"
                          inputmode="numeric"
                        />
                      </div>
                    </div>
                    <div class="field-double__item w-100">
                      <div class="custom-range-input-wrap">
                        <input
                          type="text"
                          class="
                            custom-range-input custom-range-input__currency
                          "
                          data-bslider-min="0"
                          data-bslider-value="0"
                        />
                      </div>
                      <!-- <input
                        type="range"
                        min="0"
                        max="100000000"
                        step="100000"
                        value="1000000"
                        class="field-range"
                      /> -->
                    </div>
                  </div>
                </div>
                <div class="field-wrapper field-wrapper--vertical">
                  <div class="field-label-wrap">
                    <div class="field-label">
                      <i class="field-label__icon icon-house"></i>
                      <span>
                        How much do you require on a monthly basis to support
                        your family expense (per person) and for how long?
                      </span>
                    </div>
                  </div>
                  <div class="row w-100 px-lg-5">
                    <div class="col-lg-4">
                      <div class="column-structure">
                        <div class="column-structure__desc">
                          <i class="icon-person"></i>
                          <span>Spouse</span>
                        </div>
                        <div class="column-structure__content">
                          <div class="mb-2">
                            <div class="field-currency-wrap">
                              <input
                                type="text"
                                id="f_spouse_monthly_payment"
                                name="spouse_monthly_payment"
                                placeholder="Amount/Month"
                                class="field-currency"
                                inputmode="numeric"
                              />
                            </div>
                          </div>
                          <div>
                            <div class="field-number-wrap mw-100">
                              <button type="button" class="field-number-minus">
                                -
                              </button>
                              <input
                                type="number"
                                id="f_spouse_payment_years"
                                name="spouse_payment_years"
                                class="field-number"
                                min="0"
                                max="30"
                                placeholder="Number of Years"
                              />
                              <button type="button" class="field-number-plus">
                                +
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="column-structure">
                        <div class="column-structure__desc">
                          <i class="icon-child"></i>
                          <span>Child</span>
                        </div>
                        <div class="column-structure__content">
                          <div class="mb-2">
                            <div class="field-currency-wrap">
                              <input
                                type="text"
                                id="f_child_monthly_payment"
                                name="child_monthly_payment"
                                placeholder="Amount/Month"
                                class="field-currency"
                                inputmode="numeric"
                              />
                            </div>
                          </div>
                          <div>
                            <div class="field-number-wrap mw-100">
                              <button type="button" class="field-number-minus">
                                -
                              </button>
                              <input
                                type="number"
                                id="f_child_payment_years"
                                name="child_payment_years"
                                class="field-number"
                                min="0"
                                max="30"
                                placeholder="Number of Years"
                              />
                              <button type="button" class="field-number-plus">
                                +
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="column-structure">
                        <div class="column-structure__desc">
                          <i class="icon-person"></i>
                          <span> Other Dependents </span>
                        </div>
                        <div class="column-structure__content">
                          <div class="mb-2">
                            <div class="field-currency-wrap">
                              <input
                                type="text"
                                id="f_dependents_monthly_payment"
                                name="dependents_monthly_payment"
                                placeholder="Amount/Month"
                                class="field-currency"
                                inputmode="numeric"
                              />
                            </div>
                          </div>
                          <div>
                            <div class="field-number-wrap mw-100">
                              <button type="button" class="field-number-minus">
                                -
                              </button>
                              <input
                                type="number"
                                id="f_dependents_payment_years"
                                name="dependents_payment_years"
                                class="field-number"
                                min="0"
                                max="30"
                                placeholder="Number of Years"
                              />
                              <button type="button" class="field-number-plus">
                                +
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="stepper__step stepper__step-4 d-none">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="finish-screen__title">
                      Your Required Protection
                    </div>
                    <div class="finish-screen__total">15,000,000 LAK</div>
                    <div class="finish-screen__controls">
                      <button
                        type="button"
                        id="recalculateBtn"
                        class="ty-button ty-button--grey ty-button--slim"
                      >
                        Recalculate
                      </button>
                      <button
                        type="button"
                        id="downloadBtn"
                        class="ty-button ty-button--slim"
                        data-url="/api/download-pdf.php"
                        data-lang=""
                      >
                        <i class="icon-download"></i>
                        <span>Download Result</span>
                      </button>
                      <input id="uniqueId" type="hidden" name="unique_id" />
                    </div>
                    <div class="finish-screen__title">
                      Thank you for completing the Prudential <br />
                      Protection Calculator!
                    </div>
                    <div class="finish-screen__text">
                      Would you like our Prudential Financial Consultant to
                      contact you to discuss your results?
                    </div>
                    <div class="finish-screen__contacts">
                      <input id="requestId" type="hidden" name="request_id">
                      <button
                        id="getInTouchBtn"
                        type="button"
                        class="ty-button ty-button--slim"
                        data-url="/api/handler.php"
                      >
                        Get in touch
                      </button>
                    </div>
                  </div>
                  <div class="col-lg-6 d-none d-lg-block">
                    <div class="stepper__splash-wrap">
                      <img
                        src="/public/assets/finish.png"
                        alt="pic"
                        class="stepper__splash"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="stepper__footer">
              <button
                type="button"
                id="backBtn"
                class="ty-button ty-button--grey d-none"
              >
                Back
              </button>
              <button type="button" id="nextBtn" class="ty-button">Next</button>
            </div>
          </form>
        </div>
        <div id="resultScreen" class="result printing d-none">
          <div class="print-logo">
            <img src="/public/assets/logo.png" alt="logo" class="main-header__logo" />
          </div>
          <div class="result__header">
            <div class="result__title">
              Here is the summary of our calculation
            </div>
          </div>
          <div id="resultContainer">
            <div class="row">
              <div class="col-lg-6">
                <div class="result__content">
                  <p>My name is</p>
                  <p>
                    <span id="result_name" class="input-tag"> N/A </span>
                  </p>
                  <p>
                    I am <span id="result_age" class="input-tag">0</span> years
                    old, 
                    <span id="result_marital" class="input-tag">
                      <span class="value" data-value="1">Single</span>
                      <span class="value" data-value="2">Married</span>
                      <span class="value" data-value="3">Widowed</span>
                      <span class="value" data-value="4">Divorced</span>
                      <span class="value" data-value="5">Other</span>
                      <span class="value-fallback">N/A</span>
                    </span>
                  </p>
                  <p>
                    I am from 
                    <span id="result_residence" class="input-tag">
                      <span class="value" data-value="1">
                        Vientiane Capital
                      </span>
                      <span class="value" data-value="2">Vientiane</span>
                      <span class="value" data-value="3">Savannakhet</span>
                      <span class="value" data-value="4">Champasack</span>
                      <span class="value" data-value="5">Luangprabang</span>
                      <span class="value" data-value="6">Khammuane</span>
                      <span class="value" data-value="7">Bokeo</span>
                      <span class="value" data-value="8">Borikhamxay</span>
                      <span class="value" data-value="9">Huaphanh</span>
                      <span class="value" data-value="10">Luangnamtha</span>
                      <span class="value" data-value="11">Oudomxay</span>
                      <span class="value" data-value="12">Phongsaly</span>
                      <span class="value" data-value="13">Saravanh</span>
                      <span class="value" data-value="14">Xayabury</span>
                      <span class="value" data-value="15">Xaysomboon</span>
                      <span class="value" data-value="16">Xiengkhuang</span>
                      <span class="value" data-value="17">Sekong</span>
                      <span class="value" data-value="18">Attapeu</span>
                      <span class="value-fallback">N/A</span>
                    </span>
                  </p>
                  <p>
                    I have
                    <span id="result_child" class="input-tag">0</span>
                    child/children and
                    <span id="result_dependents" class="input-tag">0</span>
                    other dependents.
                  </p>
                  <p>
                    My monthly salary is
                    <span id="result_salary" class="input-tag"> 0 LAK </span>
                    and
                  </p>
                  <p>
                    I have
                    <span id="result_savings" class="input-tag"> 0 LAK </span>
                    savings. I also have
                  </p>
                  <p>
                    <span id="result_loans" class="input-tag"> 0 LAK </span>
                    outstanding loans.
                  </p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="result__content-title">
                  Prudential&nbsp;is&nbsp;beside&nbsp;you&nbsp;to&nbsp;help you
                  get the most of your life!
                </div>
                <hr class="result__hr" />
                <div class="result__content-subtitle">
                  Your&nbsp;Required&nbsp;Protection
                </div>
                <div class="result__content">
                  <p>
                    After a careful calculation of the information you provided
                    us, Prudential Laos would like to present your personalized
                    plan.
                  </p>
                  <!-- <p>
                    Length
                    <span id="result_length" class="input-tag">0 Years</span>
                  </p> -->
                  <p>
                    Coverage Amount
                    <span id="result_total" class="input-tag"> 0 LAK </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="result__footer">
            <button
              type="button"
              id="backDownloadBtn"
              class="ty-button ty-button--grey"
            >
              Back
            </button>
          </div>
        </div>
      </div>
    </main>

    <div id="genderChartPopup" class="overlay-cdk">
      <div class="overlay-cdk__content-wrap">
        <button type="button" class="overlay-cdk__close-btn">
          <i class="icon-close"></i>
        </button>
        <div class="overlay-cdk__content">
          <div class="overlay-cdk__content-chart">
            <canvas id="genderChart" width="400" height="400"></canvas>
          </div>
          <div class="overlay-cdk__content-title preloader">Loading ...</div>
          <div class="overlay-cdk__content-title result">
            <span class="percent"></span>
            <span>% of users are</span>
            <span class="value" data-value="1">Male</span>
            <span class="value" data-value="2">Female</span>
            <span class="value" data-value="3">Other</span>
            <span class="value-fallback">N/A</span>
          </div>
        </div>
      </div>
    </div>
    <div id="ageChartPopup" class="overlay-cdk">
      <div class="overlay-cdk__content-wrap">
        <button type="button" class="overlay-cdk__close-btn">
          <i class="icon-close"></i>
        </button>
        <div class="overlay-cdk__content">
          <div class="overlay-cdk__content-chart">
            <canvas id="ageChart" width="400" height="400"></canvas>
          </div>
          <div class="overlay-cdk__content-title preloader">Loading ...</div>
          <div class="overlay-cdk__content-title result">
            <span class="percent"></span>
            <span>% of users are</span>
            <span class="value-fallback">N/A</span>
          </div>
        </div>
      </div>
    </div>
    <div id="residenceChartPopup" class="overlay-cdk">
      <div class="overlay-cdk__content-wrap">
        <button type="button" class="overlay-cdk__close-btn">
          <i class="icon-close"></i>
        </button>
        <div class="overlay-cdk__content">
          <div class="overlay-cdk__content-chart">
            <canvas id="residenceChart" width="400" height="400"></canvas>
          </div>
          <div class="overlay-cdk__content-title preloader">Loading ...</div>
          <div class="overlay-cdk__content-title result">
            <span class="percent">0</span>
            <span>% of users are from </span>
            <span class="value" data-value="1">Vientiane Capital</span>
            <span class="value" data-value="2">Vientiane</span>
            <span class="value" data-value="3">Savannakhet</span>
            <span class="value" data-value="4">Champasack</span>
            <span class="value" data-value="5">Luangprabang</span>
            <span class="value" data-value="6">Khammuane</span>
            <span class="value" data-value="7">Bokeo</span>
            <span class="value" data-value="8">Borikhamxay</span>
            <span class="value" data-value="9">Huaphanh</span>
            <span class="value" data-value="10">Luangnamtha</span>
            <span class="value" data-value="11">Oudomxay</span>
            <span class="value" data-value="12">Phongsaly</span>
            <span class="value" data-value="13">Saravanh</span>
            <span class="value" data-value="14">Xayabury</span>
            <span class="value" data-value="15">Xaysomboon</span>
            <span class="value" data-value="16">Xiengkhuang</span>
            <span class="value" data-value="17">Sekong</span>
            <span class="value" data-value="18">Attapeu</span>
            <span class="value-fallback">N/A</span>
          </div>
        </div>
      </div>
    </div>
    <div id="maritalChartPopup" class="overlay-cdk">
      <div class="overlay-cdk__content-wrap">
        <button type="button" class="overlay-cdk__close-btn">
          <i class="icon-close"></i>
        </button>
        <div class="overlay-cdk__content">
          <div class="overlay-cdk__content-chart">
            <canvas id="maritalChart" width="400" height="400"></canvas>
          </div>
          <div class="overlay-cdk__content-title preloader">Loading ...</div>
          <div class="overlay-cdk__content-title result">
            <span class="percent">0</span>
            <span>% of users are </span>
            <span class="value" data-value="1">Single</span>
            <span class="value" data-value="2">Married</span>
            <span class="value" data-value="3">Widowed</span>
            <span class="value" data-value="4">Divorced</span>
            <span class="value" data-value="5">Other</span>
            <span class="value-fallback">N/A</span>
          </div>
        </div>
      </div>
    </div>

    <div id="preloaderOverlay" class="overlay-preloader">
      <div class="overlay-preloader__content-wrap">
        <div class="loader">Loading...</div>
        <div class="text-white">Please wait ...</div>
      </div>
    </div>

    <div id="getInTouchPopup" class="overlay-cdk">
      <div class="overlay-cdk__content-wrap">
        <button type="button" class="overlay-cdk__close-btn">
          <i class="icon-close"></i>
        </button>
        <div class="overlay-cdk__content">
          <div class="mb-5">
            <img
              class="d-block mx-auto"
              src="/public/assets/success_form.png"
              alt="success"
            />
          </div>
          <div class="overlay-cdk__content-title mw-100">
            Your information has been sent! <br />
            Our Financial consultant will contact you soon.
          </div>
        </div>
      </div>
    </div>

    <div id="mobileMenu" class="mobile-menu-overlay">
      <ul class="mobile-menu-overlay__menu">
        <li>
          <a href="#" title="We Do Dance"> We Do Dance<span class="i-icon i-icon-arrow-down-thin"></span>
          </a>
          <div class="mobile-menu-overlay__menu-panel">
            <ul>
              <li>
                <a href="https://www.prudential.la/corp/prudential-la/en/dance-for-wellness/"
                  title="Dance for Wellness">
                  Dance for Wellness
                </a>
              </li>
              <li>
                <a href="https://www.prudential.la/corp/prudential-la/en/prudential-x-superm/"
                  title="Prudential x SuperM">
                  Prudential x SuperM
                </a>
              </li>
              <li>
                <a href="https://www.prudential.la/corp/prudential-la/en/join-the-virtual-concert/"
                  title="Join the virtual concert">
                  Join the virtual concert
                </a>
              </li>
              <li>
                <a href="https://www.prudential.la/corp/prudential-la/en/join-the-dance-challenge/superm-dance-tutorials/"
                  title="Videos">
                  Videos
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#" title="We Do Pulse">
            We Do Pulse<span class="i-icon i-icon-arrow-down-thin"></span>
          </a>
          <div class="mobile-menu-overlay__menu-panel">
            <ul>
              <li>
                <a href="https://www.prudential.la/corp/prudential-la/en/we-do-pulse/"
                  title="Explore Pulse">
                  Explore Pulse
                </a>
              </li>
              <li>
                <a href="https://www.prudential.la/corp/prudential-la/en/we-do-pulse/health-and-wellness/"
                  title="Health and wellness articles">
                  Health and wellness articles
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#" title="Products">
            Products<span class="i-icon i-icon-arrow-down-thin"></span>
          </a>
          <div class="mobile-menu-overlay__menu-panel">
            <ul>
            <li class="mobile-menu-overlay__inner-menu-wrap">
                <div class="mobile-menu-overlay__inner-menu-btn-wrap">
                  <a
                    title="Life insurance "
                    href="javascript:;"
                    class="mobile-menu-overlay__inner-menu-btn"
                  >
                    Life insurance
                  </a>
                  <div class="right-icon">
                    <i class="i-icon i-icon-arrow-right" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="mobile-menu-overlay__inner-menu">
                  <div class="mobile-menu-overlay__inner-menu-content">
                    <div class="back-icon">
                      <a class="parent-link" title="Life insurance ">
                        <i
                          class="i-icon i-icon-arrow-left"
                          aria-hidden="true"
                        ></i>
                        <span>Life insurance </span>
                      </a>
                    </div>
                    <ul class="mobile-menu-overlay__inner-menu-list">
                      <li>
                        <a
                          class="child-link"
                          data-title=""
                          href="https://www.prudential.la/corp/prudential-la/en/life-insurance/"
                          title="Life insurance "
                        >
                          Life insurance
                        </a>
                      </li>
                      <li>
                        <a
                          class="child-link"
                          data-title="PRULife Saver"
                          href="https://www.prudential.la/corp/prudential-la/en/life-insurance/prulife-saver/"
                          title="PRULife Saver"
                        >
                          PRULife Saver
                        </a>
                      </li>
                      <li>
                        <a
                          class="child-link"
                          data-title="PRUBright Family"
                          href="https://www.prudential.la/corp/prudential-la/en/life-insurance/prubright-family/"
                          title="PRUBright Family"
                        >
                          PRUBright Family
                        </a>
                      </li>
                      <li>
                        <a
                          class="child-link"
                          data-title="PRUDream Protector"
                          href="https://www.prudential.la/corp/prudential-la/en/life-insurance/prudream-protector/"
                          title="PRUDream Protector"
                        >
                          PRUDream Protector
                        </a>
                      </li>
                      <li>
                        <a
                          class="child-link"
                          data-title="PRUDengue"
                          href="https://www.prudential.la/corp/prudential-la/en/life-insurance/prudengue/"
                          title="PRUDengue"
                        >
                          PRUDengue
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <a
                  href="https://www.prudential.la/corp/prudential-la/en/guide-to-insurance/"
                  title="Guide to insurance"
                >
                  Guide to insurance
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#" title="Claims &amp; Services">
            Claims &amp; Services<span
              class="i-icon i-icon-arrow-down-thin"
            ></span>
          </a>
          <div class="mobile-menu-overlay__menu-panel">
            <ul>
              <li>
                <a href="https://www.prudential.la/corp/prudential-la/en/claims/" title="Claims">
                  Claims
                </a>
              </li>
              <li>
                <a
                  href="https://www.prudential.la/corp/prudential-la/en/policy-payment/"
                  title="Policy and payment"
                >
                  Policy and payment
                </a>
              </li>
              <li>
                <a href="https://www.prudential.la/corp/prudential-la/en/support/" title="Support">
                  Support
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#" title="Work with Us">
            Work with Us<span class="i-icon i-icon-arrow-down-thin"></span>
          </a>
          <div class="mobile-menu-overlay__menu-panel">
            <ul>
              <li>
                <a
                  href="https://www.prudential.la/corp/prudential-la/en/why-work-with-prudential/"
                  title="Why work with us"
                >
                  Why work with us
                </a>
              </li>
              <li>
                <a
                  href="https://www.prudential.la/corp/prudential-la/en/why-work-with-prudential/our-team/"
                  title="Our team"
                >
                  Our team
                </a>
              </li>
              <li>
                <a
                  href="https://www.prudential.la/corp/prudential-la/en/why-work-with-prudential/graduates-and-students/"
                  title="Graduates and students"
                >
                  Graduates and students
                </a>
              </li>
              <li>
                <a
                  href="https://www.prudential.la/corp/prudential-la/en/why-work-with-prudential/career-help/"
                  title="Career help"
                >
                  Career help
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#" title="About Us">
            About Us<span class="i-icon i-icon-arrow-down-thin"></span>
          </a>
          <div class="mobile-menu-overlay__menu-panel">
            <ul>
              <li>
                <a
                  href="https://www.prudential.la/corp/prudential-la/en/about-prudential-laos/"
                  title="Prudential Laos"
                >
                  Prudential Laos
                </a>
              </li>
              <li>
                <a href="https://www.prudential.la/corp/prudential-la/en/newsroom/" title="Newsroom">
                  Newsroom
                </a>
              </li>
              <li>
                <a
                  href="https://www.prudential.la/corp/prudential-la/en/corporate-social-responsibility/"
                  title="Corporate social responsibility"
                >
                  Corporate social responsibility
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
      <div class="mobile-menu-overlay__language">
        <div class="mobile-menu-overlay__language-select-wrap">
          <a
            class="mobile-menu-overlay__language-select-btn"
            href="#"
            title="English"
          >
            <i class="i-icon i-icon-language"></i>
            <span>English</span>
          </a>
          <select
            class="mobile-menu-overlay__language-select"
            title="English"
            tabindex="-1"
            id="mobileLanguageSelect"
          >
            <option value="/" selected="">English</option>
            <option value="/la/">ລາວ</option>
          </select>
        </div>
      </div>
    </div>
    <div class="mobile-menu-overlay-backdrop"></div>

    <!-- inject:footer:html -->
    
    <!-- endinject -->
    <script src="/public/js/components.min.js"></script>
    <script src="/public/libs/bootstrap-slider/bootstrap-slider.min.js"></script>
    <script src="/public/libs/autoNumeric.min.js"></script>
    <script src="/public/libs/html2canvas.min.js"></script>
    <script src="/public/libs/chart.min.js"></script>
    <!-- <script src="https://unpkg.com/dompurify@2.3.1/dist/purify.js"></script> -->
    <script src="/public/libs/jspdf.umd.min.js"></script>
    <script src="/public/js/main.min.js"></script>
  </body>
</html>
