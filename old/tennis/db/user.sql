insert into users (name, password) values
('yamada', sha2('yamadapass', 256)),
('tanaka', sha2('tanakapass', 256)),
('kikuchi', sha2('kikuchipass', 256));

SELECT users.id, users.name AS login_name, profiles.name AS name
FROM users, profiles
WHERE users.id = profiles.id AND users.name = 'yamada' AND users.password = 'ae70abc5a365b918447bc7548963fbd5802ac8b78544126a5107fb87ba96e81b'