<?php

return [
    'alipay' => [
        'app_id'         => '2016092800619244',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqUco0BT8XWLzxsGlU2sZJXuN/wODloROxE65kIehPTmRjzcsvWL/zE7YOqM7AESG+QUpCjM9nqGRNK0Qw/+Kq9VJVNwhze2b1UaXWgdXnuDh6zfY2O4fEKXxWxMpEtcig8jHzbXx7HLMWk0wfllHHmCoCZ1wrLOCpiK09EGeSgFQ81Zlpx0VVLoU1YGhrwmWedFCVNL+pIJiMBfSAPvYHgrle80YbZajAf076/LQUPtfDmJTtv/DuFWcn1b6ynX3uw8k7J/PEcDg/iruXjfMAccREwOH3ACdvRPokHXiTqi5odgs2bj44BlgrUJpBP+Wu+No3izz0t1azvYJTC+tYQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA66XsSS0ThwfOqjRhbLhizZdDxUc2EzTfagpZ7zMJ7zfnnWm7Q3+UvHJveOXAGDi/7kOk2q2MuBsFdvRbJnXDy54e2+gBmd+ZxvGOjwwJabYe2R350y0koo6nuVaIx+8jzVJtZytY7R3aUl0BgF6xHYQPMiU7eDROWMZ1qE0kEA5csl3pnIfPGmDkWBuwIKvIQGe5+0uyvFXkXPsQVC/CQm9mFaibWxGJvXnaXoLFg3L/8ooUNfn0BKeMiJkFdw5D6x1oI5vywUctXkbDPRjJ8iqMisNIlgdu2ZessKwXAf9kaZTOk+MUasxwrMHhhC1pgXeQy514cLHdwouBXDuyewIDAQABAoIBACH9W9iuPMvUT3Xzej4BVpcLA4Z4IA+jJ7qW5aP/+6XarXjiIFW7GEwaQYPxt8SGowCOF0BHmi2QEDi5RFCG2ggLta3IiDqWqwqsGwD9Hnp1/3sXvMo+D7O22fB8z9vu3X4nLoqcEQaasLwCmE3Y2rlELCDyh+JtwQNDFQOCpPn/oXk5qHHrqexmh+cA6fVV/+hTcmHGJwAvw9sYuUakw2hkTm/YTj6E0zn2FNe1o1Ia6A62SG8U0et6fVakFnT5NNz9EcSA9MPXjw+2rcRL1sjSQc5lKnEF13887BKjalpP4qnZXTox1uyYBrxYq0WIDtncfCcVJOD5f9vNUqRLP3ECgYEA+FmHPPLryacQ8lWya7z9sAQVBZofZ8UCfxMQNxrdVuzD2YSdKmzM6HlxY8F3vVaMrX05BIgPKA42gIHdiwRKLf6QkwEcr2paQsg3qbXO5we9ZOGZdJy5l2aMnAS0vpN5g/RSCmSCOHMUEPPqq9DwDivpH/RpzxXJE0eCf+4sVlkCgYEA8ug7Eu7hb10lvpFFMiE5O2fOXa+q2Z8Z36xQt+5VJzGbAcwyhGFA7TwXAuaHY4ArL4GvAKOsbahGEubDyiWlu1vUR56CljbFaENp6uUi3CeTL+4WECS8IT5wnJzsPgjoQ5U+Pd+fOXDUUBzzD0saW3jHt6uJ471CMOTkKbXUHPMCgYA368jk83oeZQ0O1DchxWOGT9T/9u1da2IdhQhgsB7o5NVQ1GijVe5p5nae1MCGlMeGhSzilVR8W37wPs3I8MVXR/v77gMsiJEceoL2JucY5IhD//yS4ntz2PaOZwzf4Ms66DfU+T7NQTRigNn1qE11k3Oh62Ir7CbjvXVoIxQ+uQKBgDKptzCCvGhC0E2H9Ru4jDxUsVke+456PaZGRWunfQE4unDMizjLJASXBOGo/VIGeHtnG/4RJTSV5U+p6+osof2K8KKjb+8uq0vMy7mfYv7yDiPwD4/8aXSxlkFEBY4Gw5Lc/Odgzc/oNZAkCZoF+xBbB6TKVW83mSejhechMoV7AoGBAOKbrrrsFyZm4wnNY4RKmJ2R3TViMz8nL/ThsQcvnbt5dxKBmtBYUnnA6cfKVLcRZ1mc61FDCStb9w6Non1VtLJ8jX9Yw7nfcTfkExZMip8NQL/ICU2LUTHOhm7ve2a6+o3qcEx0CzVXldMtidCjMHEwDq/KQXjtqf2kCThJJtLn',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];