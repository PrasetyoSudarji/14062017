--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: SAS; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "SAS" (
    id integer NOT NULL,
    tanggal date,
    oil real,
    gas real
);


ALTER TABLE public."SAS" OWNER TO postgres;

--
-- Name: counter; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE counter (
    id integer NOT NULL,
    liquid integer,
    gas integer,
    sas integer,
    pt integer
);


ALTER TABLE public.counter OWNER TO postgres;

--
-- Name: data_user; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE data_user (
    id integer NOT NULL,
    name text,
    password text,
    username text
);


ALTER TABLE public.data_user OWNER TO postgres;

--
-- Name: pressure_temperature; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pressure_temperature (
    id integer NOT NULL,
    tanggal date,
    well_name text,
    choke integer,
    thp real,
    fl real,
    chp real
);


ALTER TABLE public.pressure_temperature OWNER TO postgres;

--
-- Name: produksi_gas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE produksi_gas (
    id integer NOT NULL,
    tanggal text,
    well_name text,
    choke integer,
    hp_scrubber real,
    lp real,
    total real
);


ALTER TABLE public.produksi_gas OWNER TO postgres;

--
-- Name: produksi_liquid; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE produksi_liquid (
    id integer NOT NULL,
    tanggal date,
    well_name text,
    choke integer,
    bopd real,
    blpd real,
    kadar_air real
);


ALTER TABLE public.produksi_liquid OWNER TO postgres;

--
-- Name: submenu; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE submenu (
    id integer NOT NULL,
    name text,
    status text
);


ALTER TABLE public.submenu OWNER TO postgres;

--
-- Name: well; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE well (
    id text NOT NULL,
    name text,
    status text
);


ALTER TABLE public.well OWNER TO postgres;

--
-- Data for Name: SAS; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "SAS" (id, tanggal, oil, gas) FROM stdin;
1	2017-01-01	843	45.8400002
2	2017-02-01	838	45.1100006
3	2017-03-01	834	45.8199997
4	2017-04-01	829	43.0999985
5	2017-05-01	824	43.0999985
6	2017-06-01	820	43.0999985
7	2017-07-01	815	43.0999985
9	2017-09-01	806	43.0999985
8	2017-08-01	811	43.0999985
10	2017-10-01	802	43.0999985
11	2017-11-01	798	43.0999985
12	2017-12-01	798	43.0999985
\.


--
-- Data for Name: counter; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY counter (id, liquid, gas, sas, pt) FROM stdin;
1	1	1	1	1
\.


--
-- Data for Name: data_user; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY data_user (id, name, password, username) FROM stdin;
1	Prasetyo Sudarji	admin	admin
\.


--
-- Data for Name: pressure_temperature; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY pressure_temperature (id, tanggal, well_name, choke, thp, fl, chp) FROM stdin;
\.


--
-- Data for Name: produksi_gas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY produksi_gas (id, tanggal, well_name, choke, hp_scrubber, lp, total) FROM stdin;
\.


--
-- Data for Name: produksi_liquid; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY produksi_liquid (id, tanggal, well_name, choke, bopd, blpd, kadar_air) FROM stdin;
\.


--
-- Data for Name: submenu; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY submenu (id, name, status) FROM stdin;
1	Layers	1
2	Description	0
\.


--
-- Data for Name: well; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY well (id, name, status) FROM stdin;
krd01	karangdewa	active
lvt01	lavatera	active
pds01	pagardewa selatan	active
pds02	pagardewa selatan	active
pdw03	pagardewa	active
pdw04	pagardewa	active
pdw05	pagardewa	active
pdw06	pagardewa	active
pdw07	pagardewa	active
pdw08	pagardewa	active
pmn04	prabumenang	active
pmn05	prabumenang	active
pmn06	prabumenang	active
pmn09	prabumenang	active
pmn10	prabumenang	active
pmt04	pemaat	active
pmt02	pemaat	active
pmt03	pemaat	active
prt04	piretrium	active
tsm01	tasim	active
tsm03	tasim	active
tsm04	tasim	active
tsm06	tasim	active
\.


--
-- Name: pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "SAS"
    ADD CONSTRAINT pk PRIMARY KEY (id);


--
-- Name: pk_counter; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY counter
    ADD CONSTRAINT pk_counter PRIMARY KEY (id);


--
-- Name: pk_liquid; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY produksi_liquid
    ADD CONSTRAINT pk_liquid PRIMARY KEY (id);


--
-- Name: pk_produksi_gas; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY produksi_gas
    ADD CONSTRAINT pk_produksi_gas PRIMARY KEY (id);


--
-- Name: pk_pt; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pressure_temperature
    ADD CONSTRAINT pk_pt PRIMARY KEY (id);


--
-- Name: pk_submenu; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY submenu
    ADD CONSTRAINT pk_submenu PRIMARY KEY (id);


--
-- Name: pk_user; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY data_user
    ADD CONSTRAINT pk_user PRIMARY KEY (id);


--
-- Name: pk_well; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY well
    ADD CONSTRAINT pk_well PRIMARY KEY (id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

