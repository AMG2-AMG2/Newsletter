<section class="newsletter">
    <div class="newsletter__wrapper">
        <form class="newsletter__form" method="post" action="subscribe.php">
            <label class="newsletter__label" for="email">Email:</label>
            <input class="newsletter__input" type="email" id="email" name="email" placeholder="Peter@email.nl" required>

            <fieldset class="newsletter__fieldset">
                <legend class="newsletter__legend">Selecteer nieuwsbrief types:</legend>
                <label class="newsletter__checkbox">
                    <input type="checkbox" name="newsletter-type" value="type1">
                    Nieuwsbrief Type 1
                </label>
                <label class="newsletter__checkbox">
                    <input type="checkbox" name="newsletter-type" value="type2">
                    Nieuwsbrief Type 2
                </label>
            </fieldset>

            <button class="newsletter__submit" type="submit">Verzenden</button>
        </form>
    </div>
</section>