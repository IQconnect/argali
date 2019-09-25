<div class="form-box">
	<!-- form-box__header -->
	<div class="form-box__header">
		<h2 class="section-header card-block__title">
			<span class="title section-header__title--left">
				Potrzebujesz
			</span>
			<span class="section-header__sub--left subtitle ">
				pomocy?
			</span>
		</h2>
	</div>
	<!-- form-box__content form -->
	<form class="form-box__content" id="form" action="mail.php" method="POST">
		<!-- form__row -->
		<div class="form-box__row">
			<div class="form-box__col">
				<label class="form__label text">Imie i nazwisko</label>
				<input class="form__input">
			</div>
		</div>
		<!-- form__row -->
		<div class="form-box__row">
			<div class="form-box__col">
				<label class="form__label text">Mail</label>
				<input class="form__input">
			</div>
			<div class="form-box__col">
				<label class="form__label text">Telefon</label>
				<input class="form__input">
			</div>
		</div>
		<!-- form__row -->
		<div class="form-box__row">
			<div class="form__col">
				<label class="form__label  text" for="name">Wiadomość</label>
                <textarea class="form__textarea" rows="12" name="textarea"></textarea>
			</div>
		</div>
		<!-- form__checkcontainer -->
		<div class="form__checkcontainer">
			<div class="form-box__col">
				<input class="form__check" type="checkbox" name="checkbox">
            	<label class="form__labelcheck small-text form__label--zgoda" for="name">
					Zapoznałem się z Polityką prywatności serwisu apartamentyjuno.pl oraz wyrażam zgodę na
					przetwarzanie przez ...Nazwa firmy, ...adres, udostępnionych przeze mnie danych
					osobowych na zasadach opisanych w Polityce prywatności dostępnej w Serwisie. Oświadczam,
					że są mi znane cele przetwarzania danych oraz moje uprawnienia. Niniejsza zgoda może być
					wycofana w dowolnym czasie poprzez kontakt z Administratorem pod adresem
					biuro@apartamentyjuno.pl, bez wpływu na zgodność z prawem przetwarzania, którego
					dokonano na podstawie zgody przed jej cofnięciem. Więcej informacji dotyczących
					przetwarzania danych osobowych - Obowiązek Informacyjny.
				</label>
			</div>
		</div>
		<!-- form__row -->
		<div class="form-box__row">
			<button href="#" class="button button--secondary text  main text--thin">Wyślij</button>
		</div>
	</form>
</div>

<section class="form-section">
    <img class="form-section__bg" src="${sectionbg}" alt="background">
    <div class="container">
        <div class="form-section__content">
            <div class="form-section__desc">
                <div class="form-section-box">

                    <form id="form" action="mail.php" method="POST">
                        <div class="form-section--row">
                            <div>
                                <label class="form__label text">Imie i nazwisko</label>
                                <input class="form__input">
                            </div>
                        </div>
                        <div class="form-section--row">
                            <div>
                                <label class="form__label text">Mail</label>
                                <input class="form__input">
                            </div>
                            <div>
                                <label class="form__label text"> Telefon </label>
                                <input class="form__input">
                            </div>
                        </div>
                        <label class="form__label  text" for="name">
                            Wiadomość
                        </label>
                        <p>
                            <textarea class="form__textarea" rows="12" name="textarea"></textarea>
                        </p>

                        <div class="form__checkcontainer">
                            <input class="form__check" type="checkbox" name="checkbox">
                            <label class="form__labelcheck small-text form__label--zgoda" for="name">
                                Zapoznałem się z Polityką prywatności serwisu apartamentyjuno.pl oraz wyrażam zgodę na
                                przetwarzanie przez ...Nazwa firmy, ...adres, udostępnionych przeze mnie danych
                                osobowych na zasadach opisanych w Polityce prywatności dostępnej w Serwisie. Oświadczam,
                                że są mi znane cele przetwarzania danych oraz moje uprawnienia. Niniejsza zgoda może być
                                wycofana w dowolnym czasie poprzez kontakt z Administratorem pod adresem
                                biuro@apartamentyjuno.pl, bez wpływu na zgodność z prawem przetwarzania, którego
                                dokonano na podstawie zgody przed jej cofnięciem. Więcej informacji dotyczących
                                przetwarzania danych osobowych - Obowiązek Informacyjny.
                            </label>
                        </div>
                        </br>
                        <div class="form-section--row">
                            <div>
                                <button href="#" class="button button--secondary text  main text--thin">
                                    Wyślij
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
