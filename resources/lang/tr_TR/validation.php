<?php
/**
 * validation.php
 * Copyright (c) 2017 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

return [
    'iban'                           => 'Bu IBAN geçerli değilrdir.',
    'unique_account_number_for_user' => 'Bu hesap numarası zaten kullanılmaktadır.',
    'deleted_user'                   => 'Güvenlik kısıtlamaları nedeniyle, bu e-posta adresini kullanarak kayıt yapamazsınız.',
    'rule_trigger_value'             => 'Bu eylem, seçili işlem için geçersizdir.',
    'rule_action_value'              => 'Bu eylem seçili işlem için geçersizdir.',
    'file_already_attached'          => 'Yüklenen dosya ":name" zaten bu nesneye bağlı.',
    'file_attached'                  => '":name" dosyası başarıyla yüklendi.',
    'file_invalid_mime'              => '":name" dosyası ":mime" türünde olup yeni bir yükleme olarak kabul edilemez.',
    'file_too_large'                 => '":name" dosyası çok büyük.',
    'belongs_to_user'                => ':attribute\'nin değeri bilinmiyor',
    'accepted'                       => ':attribute kabul edilmek zorunda.',
    'bic'                            => 'Bu BIC geçerli değilrdir.',
    'more'                           => ':attribute sıfırdan büyük olmak zorundadır.',
    'active_url'                     => ':attribute geçerli bir URL değil.',
    'after'                          => ':attribute :date tarihinden sonrası için tarihlendirilmelidir.',
    'alpha'                          => ':attribute sadece harf içerebilir.',
    'alpha_dash'                     => ':attribute sadece harf, sayı ve kısa çizgi içerebilir.',
    'alpha_num'                      => ':attribute sadece harf ve sayı içerebilir.',
    'array'                          => ':attribute bir dizi olmalıdır.',
    'unique_for_user'                => ':attribute\'de zaten bir girdi var.',
    'before'                         => ':attribute :date tarihinden öncesi için tarihlendirilmelidir.',
    'unique_object_for_user'         => 'Bu isim zaten kullanılıyor',
    'unique_account_for_user'        => 'Bu hesap adı zaten kullanılıyor',
    'between.numeric'                => ':attribute :min ve :max arasında olmalıdır.',
    'between.file'                   => ':attribute, :min kilobayt ve :max kilobayt arasında olmalıdır.',
    'between.string'                 => ':attribute :min karakter ve :max karakter olmalıdır.',
    'between.array'                  => ':attribute :min öğe ve :max öğe olmalıdır.',
    'boolean'                        => ':attribute alanının doğru veya yanlış olması gerekir.',
    'confirmed'                      => ':attribute doğrulaması eşleşmiyor.',
    'date'                           => ':attribute geçerli bir tarih değil.',
    'date_format'                    => ':attribute :format formatına uymuyor.',
    'different'                      => ':attribute ve :other farklı olmalı.',
    'digits'                         => ':attribute :digits basamak olmalıdır.',
    'digits_between'                 => ':attribute en az :min basamak en fazla :max basamak olmalı.',
    'email'                          => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'filled'                         => ':attribute alanı gereklidir.',
    'exists'                         => 'Seçili :attribute geçersiz.',
    'image'                          => ':attribute bir resim olmalı.',
    'in'                             => 'Seçili :attribute geçersiz.',
    'integer'                        => ':attribute bir tamsayı olmalı.',
    'ip'                             => ':attribute geçerli bir IP adresi olmalı.',
    'json'                           => ':attribute geçerli bir JSON dizini olmalı.',
    'max.numeric'                    => ':attribute, :max değerinden daha büyük olamamalıdır.',
    'max.file'                       => ':attribute :max kilobayttan büyük olmamalıdır.',
    'max.string'                     => ':attribute :max karakterden büyük olmamalıdır.',
    'max.array'                      => ':attribute :max öğeden daha fazlasına sahip olamaz.',
    'mimes'                          => ':attribute :values türünde bir dosya olmalı.',
    'min.numeric'                    => ':attribute en az :min olmalıdır.',
    'min.file'                       => ':attribute en az :min kilobayt olmalıdır.',
    'min.string'                     => ':attribute en az :min karakter olmalıdır.',
    'min.array'                      => ':attribute en az :min öğe içermelidir.',
    'not_in'                         => 'Seçili :attribute geçersiz.',
    'numeric'                        => ':attribute sayı olmalıdır.',
    'regex'                          => ':attribute biçimi geçersiz.',
    'required'                       => ':attribute alanı gereklidir.',
    'required_if'                    => ':other :value iken :attribute alanı gereklidir.',
    'required_unless'                => ':other :values içinde değilse :attribute alanı gereklidir.',
    'required_with'                  => ':values mevcutken :attribute alanı gereklidir.',
    'required_with_all'              => ':values mevcutken :attribute alanı gereklidir.',
    'required_without'               => ':values mevcut değilken :attribute alanı gereklidir.',
    'required_without_all'           => 'Hiçbir :values mevcut değilken :attribute alanı gereklidir.',
    'same'                           => ':attribute ve :other eşleşmelidir.',
    'size.numeric'                   => ':attribute :size olmalıdır.',
    'size.file'                      => ':attribute :size kilobyte olmalıdır.',
    'size.string'                    => ':attribute :size karakter olmalıdır.',
    'size.array'                     => ':attribute :size öğeye sahip olmalıdır.',
    'unique'                         => ':attribute zaten alınmış.',
    'string'                         => ':attribute bir dizi olmalıdır.',
    'url'                            => ':attribute biçimi geçersiz.',
    'timezone'                       => ':attribute geçerli bir bölge olmalıdır.',
    '2fa_code'                       => ':attribute alanı geçersiz.',
    'dimensions'                     => ':attribute geçersiz görüntü boyutlarına sahip.',
    'distinct'                       => ':attribute alanı yinelenen bir değere sahip.',
    'file'                           => ':attribute bir dosya olmalıdır.',
    'in_array'                       => ':attribute alanı :other içinde olamaz.',
    'present'                        => ':attribute alanı mevcut olmalıdır.',
    'amount_zero'                    => 'Toplam tutar sıfır olamaz',
    'secure_password'                => 'Güvenli bir şifre değildir. Lütfen tekrar deneyin. Daha fazla bilgi için https://goo.gl/NCh2tN adresini ziyaret edin',
];
