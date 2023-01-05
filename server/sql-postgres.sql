CREATE TABLE
    users (
        id bigint NOT NULL,
        name VARCHAR(100),
        phone VARCHAR(20),
        email VARCHAR(225) UNIQUE,
        password VARCHAR(50),
        profile_pictures VARCHAR(225),
        whatsapp_group VARCHAR(225),
        telegram VARCHAR(255),
        link_royalq VARCHAR(225),
        binance VARCHAR(255)
    );

ALTER TABLE users ADD CONSTRAINT id_unique_key UNIQUE (id);

ALTER TABLE users ADD CONSTRAINT id_primary_key PRIMARY KEY (id);

CREATE UNIQUE INDEX id_primary ON public.users USING btree (id);

ALTER TABLE users OWNER TO postgres;

----

CREATE TABLE
    public.reset(
        id bigint PRIMARY KEY NOT NULL,
        code VARCHAR(225),
        email VARCHAR(225)
    );

ALTER TABLE public.reset OWNER TO postgres;
