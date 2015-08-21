<div class="row">
    <div class="col-sm-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Hlavné nastavenia</h3>
            </div>

            <!--Block Styled Form -->
            <!--===================================================-->
            <div class="form-horizontal">
                <div class="panel-body">
                    <div class="form-group">
                        {!! Form::label('name', '* Meno', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9 input-lang">
                            <div class="input-group col-sm-3 product-sale">
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Meno']) !!}
                            </div>
                            <div class="input-group col-sm-3 product-sale">
                                {!! Form::text('surname', null, ['id' => 'surname', 'class' => 'form-control', 'placeholder' => 'Priezvisko']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('titleURL', '* Meno v URL', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('titleURL', null, ['class' => 'form-control', 'placeholder' => 'Meno užívateľa v URL adrese']) !!}
                            <a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip input-tooltip" href="#" data-original-title="<p'>Meno užívateľa v URL sa zobrazí v URL adrese za doménou, napr.: www.svkmedia.sk/nazov-url/ Toto meno nesmie obsahovať diakritiku, medzery ani iné špeciálne znaky.</p>" data-html="true" title=""></a>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('role_id', '* Práva', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::select('role_id', $roles, null, ['class' => 'selectpicker', 'data-width' => '100%']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', '* Email', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Emailová adresa']) !!}
                            <a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip input-tooltip" href="#" data-original-title="<p'>Tento email slúži na prihlasovanie užívateľa a príjmanie newsletteru a iných notifikácii.</p>" data-html="true" title=""></a>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', $passwordText, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9 input-lang">
                            <div class="input-group col-sm-3 product-sale">
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => $passwordPlaceholder]) !!}
                            </div>
                            <div class="input-group col-sm-3 product-sale">
                                {!! Form::password('password_2', ['id' => 'password_2', 'class' => 'form-control', 'placeholder' => $passwordPlaceholder2]) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('profileValidStart', 'Platnosť profilu', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            <div class="input-daterange input-group" id="datepicker">
                                {!! Form::text('profileValidStart', null, ['class' => 'form-control']) !!}
                                <span class="input-group-addon">do</span>
                                {!! Form::text('profileValidEnd', null, ['id' => 'profileValidEnd', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('status', 'Zablokovať', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9 input-lang">
                            <div class="input-group">
                                {!! Form::checkbox('status', null, Input::old('status'), ['class' => 'demo-switch-orange']) !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--===================================================-->
            <!--End Block Styled Form -->

        </div>

        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Adresa a kontakt</h3>
            </div>

            <!--Block Styled Form -->
            <!--===================================================-->
            <div class="form-horizontal">
                <div class="panel-body">
                    <div class="form-group">
                        {!! Form::label('address', 'Adresa', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9 input-lang">
                            {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Ulica a popisné číslo']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('city', 'Mesto', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Mesto']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('zip', 'PSČ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::number('zip', null, ['class' => 'form-control', 'placeholder' => 'Poštové smerové číslo']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('country', 'Krajina', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::select('country', $countries, null) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('phone', 'Telefón', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => '+421 123 456 789']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('cell', 'Mobil', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('cell', null, ['class' => 'form-control', 'placeholder' => '+421 123 456 789']) !!}
                        </div>
                    </div>

                </div>
            </div>
            <!--===================================================-->
            <!--End Block Styled Form -->

        </div>

    </div>
    <div class="col-sm-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Ďalšie informácie</h3>
                <a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="#" data-original-title="<h4 class='text-thin'>Čo je to SEO?</h4><p>SEO (z anglického Search Engine Optimization) znamená Optimalizácia pre vyhľadávače. V tejto časti teda nájdete všetky nastavenia pre vyhľadávače (napr. Google).</p>" data-html="true" title=""></a>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <div class="form-horizontal">
                <div class="panel-body">
                    <div class="form-group">
                        {!! Form::label('birthdate', 'Dátum nar.', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            <div class="input-group col-sm-3 product-dimension">
                                {!! Form::select('birthdate', $days, null, ['class' => 'selectpicker', 'data-width' => '100%']) !!}
                            </div>
                            <div class="input-group col-sm-3 product-dimension">
                                {!! Form::select('birthdateMonth', $months, null, ['class' => 'selectpicker', 'data-width' => '100%']) !!}
                            </div>
                            <div class="input-group col-sm-3 product-dimension">
                                {!! Form::select('birthdateYear', $years, null, ['class' => 'selectpicker', 'data-width' => '100%']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('sex', 'Pohlavie', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::select('sex', [
                                '' => '----- Vyberte pohlavie -----',
                                '1' => 'Muž',
                                '2' => 'Žena'
                            ], null, ['class' => 'selectpicker', 'data-width' => '100%']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('picture', 'Obrázok', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            <span class="pull-left btn btn-default btn-file">
                                Prehľadávať... {!! Form::file('picture') !!}
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('newsletter', 'Newsletter', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9 input-lang">
                            <div class="input-group">
                                {!! Form::checkbox('newsletter', '1', true, ['class' => 'demo-switch']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===================================================-->
            <!--End Horizontal Form-->

        </div>

        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Fakturačné údaje</h3>
            </div>

            <!--Block Styled Form -->
            <!--===================================================-->
            <div class="form-horizontal">
                <div class="panel-body">
                    <div class="form-group">
                        {!! Form::label('billingName', 'Meno / Firma', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9 input-lang">
                            {!! Form::text('billingName', null, ['class' => 'form-control', 'placeholder' => 'Fakturácia - Meno alebo názov firmy']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('billingIco', 'IČO', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::number('billingIco', null, ['class' => 'form-control', 'placeholder' => 'Fakturácia - IČO']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('billingDic', 'DIČ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('billingDic', null, ['class' => 'form-control', 'placeholder' => 'Fakturácia - DIČ']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('billingIcDph', 'IČ DPH', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('billingIcDph', null, ['class' => 'form-control', 'placeholder' => 'Fakturácia - IČ DPH']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('billingAddress', 'Adresa', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('billingAddress', null, ['class' => 'form-control', 'placeholder' => 'Fakturácia - Ulica a popisné číslo']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('billingCity', 'Mesto', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('billingCity', null, ['class' => 'form-control', 'placeholder' => 'Fakturácia - Mesto']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('billingZip', 'PSČ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::number('billingZip', null, ['class' => 'form-control', 'placeholder' => 'Fakturácia - Poštové smerové číslo']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('billingCountry', 'Krajina', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::select('billingCountry', $countries, null) !!}
                        </div>
                    </div>

                </div>
            </div>

            <div class="panel-footer text-right">
                {!! Form::submit('Uložiť', ['class' => 'btn btn-success']) !!}
                <a href="{{ URL::previous() }}" class="btn btn-default">Storno</a>
            </div>
            <!--===================================================-->
            <!--End Block Styled Form -->

        </div>

    </div>
</div>