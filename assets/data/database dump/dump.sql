--
-- PostgreSQL database cluster dump
--

SET default_transaction_read_only = off;

SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;

--
-- Roles
--

CREATE ROLE postgres;
ALTER ROLE postgres WITH SUPERUSER INHERIT CREATEROLE CREATEDB LOGIN REPLICATION PASSWORD 'md524bb002702969490e41e26e1a454036c';






--
-- Database creation
--

REVOKE ALL ON DATABASE template1 FROM PUBLIC;
REVOKE ALL ON DATABASE template1 FROM postgres;
GRANT ALL ON DATABASE template1 TO postgres;
GRANT CONNECT ON DATABASE template1 TO PUBLIC;
CREATE DATABASE webgis WITH TEMPLATE = template0 OWNER = postgres;


\connect postgres

SET default_transaction_read_only = off;

--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: postgres; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE postgres IS 'default administrative connection database';


--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


--
-- Name: adminpack; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION adminpack; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';


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

\connect template1

SET default_transaction_read_only = off;

--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: template1; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE template1 IS 'default template for new databases';


--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


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

\connect webgis

SET default_transaction_read_only = off;

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
    chp real,
    temp real
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
-- Name: tab; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tab (
    id integer NOT NULL,
    name text,
    status text
);


ALTER TABLE public.tab OWNER TO postgres;

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

INSERT INTO "SAS" VALUES (1, '2017-01-01', 843, 45.8400002);
INSERT INTO "SAS" VALUES (2, '2017-02-01', 838, 45.1100006);
INSERT INTO "SAS" VALUES (3, '2017-03-01', 834, 45.8199997);
INSERT INTO "SAS" VALUES (4, '2017-04-01', 829, 43.0999985);
INSERT INTO "SAS" VALUES (5, '2017-05-01', 824, 43.0999985);
INSERT INTO "SAS" VALUES (6, '2017-06-01', 820, 43.0999985);
INSERT INTO "SAS" VALUES (7, '2017-07-01', 815, 43.0999985);
INSERT INTO "SAS" VALUES (9, '2017-09-01', 806, 43.0999985);
INSERT INTO "SAS" VALUES (8, '2017-08-01', 811, 43.0999985);
INSERT INTO "SAS" VALUES (10, '2017-10-01', 802, 43.0999985);
INSERT INTO "SAS" VALUES (11, '2017-11-01', 798, 43.0999985);
INSERT INTO "SAS" VALUES (12, '2017-12-01', 798, 43.0999985);


--
-- Data for Name: counter; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO counter VALUES (1, 47, 47, 14, 47);


--
-- Data for Name: data_user; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO data_user VALUES (1, 'Prasetyo Sudarji', 'admin', 'admin');


--
-- Data for Name: pressure_temperature; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO pressure_temperature VALUES (1, '2017-06-15', 'PDW03', 13, 1220, 560, 200, 120);
INSERT INTO pressure_temperature VALUES (2, '2017-06-15', 'PDW04', 9, 1130, 590, 0, 112);
INSERT INTO pressure_temperature VALUES (3, '2017-06-15', 'PDW05', 11, 1190, 550, 0, 102);
INSERT INTO pressure_temperature VALUES (4, '2017-06-15', 'PDW06', 0, 500, 500, 0, 75);
INSERT INTO pressure_temperature VALUES (5, '2017-06-15', 'PDW07', 13, 1180, 590, 810, 92);
INSERT INTO pressure_temperature VALUES (6, '2017-06-15', 'PDW08', 7, 1100, 485, 0, 95);
INSERT INTO pressure_temperature VALUES (7, '2017-06-15', 'PMN04', 9, 910, 715, 800, 85);
INSERT INTO pressure_temperature VALUES (8, '2017-06-15', 'PMN05', 11, 1180, 710, 120, 110);
INSERT INTO pressure_temperature VALUES (9, '2017-06-15', 'PMN06', 7, 1100, 730, 50, 98);
INSERT INTO pressure_temperature VALUES (10, '2017-06-15', 'PMN09', 11, 1180, 725, 0, 102);
INSERT INTO pressure_temperature VALUES (11, '2017-06-15', 'PMN10', 9, 1100, 715, 290, 95);
INSERT INTO pressure_temperature VALUES (12, '2017-06-15', 'TSM01', 11, 990, 620, 0, 102);
INSERT INTO pressure_temperature VALUES (13, '2017-06-15', 'TSM03', 0, 550, 550, 800, 78);
INSERT INTO pressure_temperature VALUES (14, '2017-06-15', 'TSM04', 0, 0, 0, 50, 75);
INSERT INTO pressure_temperature VALUES (15, '2017-06-15', 'TSM06', 5, 1190, 590, 0, 88);
INSERT INTO pressure_temperature VALUES (16, '2017-06-15', 'LVT01', 5, 830, 530, 0, 82);
INSERT INTO pressure_temperature VALUES (17, '2017-06-15', 'PMT01', 5, 1080, 640, 0, 111);
INSERT INTO pressure_temperature VALUES (18, '2017-06-15', 'PMT02', 0, 120, 120, 0, 75);
INSERT INTO pressure_temperature VALUES (19, '2017-06-15', 'PMT03', 0, 360, 360, 0, 75);
INSERT INTO pressure_temperature VALUES (20, '2017-06-15', 'PRT01', 0, 550, 550, 0, 75);
INSERT INTO pressure_temperature VALUES (21, '2017-06-15', 'KRD01', 7, 1320, 620, 1300, 98);
INSERT INTO pressure_temperature VALUES (22, '2017-06-15', 'PDS01', 7, 1200, 630, 0, 98);
INSERT INTO pressure_temperature VALUES (23, '2017-06-15', 'PDS02', 5, 800, 500, 1020, 92);
INSERT INTO pressure_temperature VALUES (24, '2017-06-14', 'PDW03', 13, 1220, 565, 200, 120);
INSERT INTO pressure_temperature VALUES (25, '2017-06-14', 'PDW04', 9, 1140, 590, 0, 112);
INSERT INTO pressure_temperature VALUES (26, '2017-06-14', 'PDW05', 11, 1180, 550, 0, 102);
INSERT INTO pressure_temperature VALUES (27, '2017-06-14', 'PDW06', 0, 500, 500, 0, 75);
INSERT INTO pressure_temperature VALUES (28, '2017-06-14', 'PDW07', 13, 1180, 590, 810, 92);
INSERT INTO pressure_temperature VALUES (29, '2017-06-14', 'PDW08', 7, 1100, 500, 0, 95);
INSERT INTO pressure_temperature VALUES (30, '2017-06-14', 'PMN04', 9, 925, 700, 800, 85);
INSERT INTO pressure_temperature VALUES (31, '2017-06-14', 'PMN05', 11, 1190, 700, 120, 110);
INSERT INTO pressure_temperature VALUES (32, '2017-06-14', 'PMN06', 7, 1100, 730, 50, 98);
INSERT INTO pressure_temperature VALUES (33, '2017-06-14', 'PMN09', 11, 1180, 720, 0, 102);
INSERT INTO pressure_temperature VALUES (34, '2017-06-14', 'PMN10', 9, 1100, 710, 290, 95);
INSERT INTO pressure_temperature VALUES (35, '2017-06-14', 'TSM01', 11, 990, 620, 0, 102);
INSERT INTO pressure_temperature VALUES (36, '2017-06-14', 'TSM03', 0, 550, 550, 800, 78);
INSERT INTO pressure_temperature VALUES (37, '2017-06-14', 'TSM04', 0, 0, 0, 50, 75);
INSERT INTO pressure_temperature VALUES (38, '2017-06-14', 'TSM06', 5, 1190, 590, 0, 88);
INSERT INTO pressure_temperature VALUES (39, '2017-06-14', 'LVT01', 5, 830, 530, 0, 82);
INSERT INTO pressure_temperature VALUES (40, '2017-06-14', 'PMT01', 5, 1080, 640, 0, 111);
INSERT INTO pressure_temperature VALUES (42, '2017-06-14', 'PMT03', 0, 360, 360, 0, 75);
INSERT INTO pressure_temperature VALUES (41, '2017-06-14', 'PMT02', 0, 120, 120, 0, 75);
INSERT INTO pressure_temperature VALUES (43, '2017-06-14', 'PRT01', 0, 550, 550, 0, 75);
INSERT INTO pressure_temperature VALUES (44, '2017-06-14', 'KRD01', 7, 1350, 620, 1300, 98);
INSERT INTO pressure_temperature VALUES (45, '2017-06-14', 'PDS01', 7, 1200, 535, 0, 98);
INSERT INTO pressure_temperature VALUES (46, '2017-06-14', 'PDS02', 5, 700, 450, 1020, 92);


--
-- Data for Name: produksi_gas; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO produksi_gas VALUES (44, '2017-06-14', 'KRD01', 7, 1.76010001, 0, 1.76010001);
INSERT INTO produksi_gas VALUES (45, '2017-06-14', 'PDS01', 7, 1.92200005, 0, 1.92200005);
INSERT INTO produksi_gas VALUES (46, '2017-06-14', 'PDS02', 5, 0.6778, 0, 0.6778);
INSERT INTO produksi_gas VALUES (1, '2017-06-15', 'PDW03', 13, 5.56090021, 0, 5.56090021);
INSERT INTO produksi_gas VALUES (2, '2017-06-15', 'PDW04', 9, 2.83260012, 0, 2.83260012);
INSERT INTO produksi_gas VALUES (3, '2017-06-15', 'PDW05', 11, 4.1717, 0, 4.171);
INSERT INTO produksi_gas VALUES (4, '2017-06-15', 'PDW06', 0, 0, 0, 0);
INSERT INTO produksi_gas VALUES (5, '2017-06-15', 'PDW07', 13, 6.95120001, 0, 6.95120001);
INSERT INTO produksi_gas VALUES (6, '2017-06-15', 'PDW08', 7, 2.33979988, 0, 2.33979988);
INSERT INTO produksi_gas VALUES (7, '2017-06-15', 'PMN04', 9, 2.20530009, 0, 2.20530009);
INSERT INTO produksi_gas VALUES (8, '2017-06-15', 'PMN05', 11, 3.87190008, 0, 3.87190008);
INSERT INTO produksi_gas VALUES (9, '2017-06-15', 'PMN06', 7, 1.1789, 0, 1.1789);
INSERT INTO produksi_gas VALUES (10, '2017-06-15', 'PMN09', 11, 2.75950003, 0, 2.75950003);
INSERT INTO produksi_gas VALUES (11, '2017-06-15', 'PMN10', 9, 3.30629992, 0, 3.30629992);
INSERT INTO produksi_gas VALUES (12, '2017-06-15', 'TSM01', 11, 2.95050001, 0, 2.95050001);
INSERT INTO produksi_gas VALUES (13, '2017-06-15', 'TSM03', 0, 0, 0, 0);
INSERT INTO produksi_gas VALUES (14, '2017-06-15', 'TSM04', 0, 0, 0, 0);
INSERT INTO produksi_gas VALUES (15, '2017-06-15', 'TSM06', 5, 1.11210001, 0, 1.11210001);
INSERT INTO produksi_gas VALUES (16, '2017-06-15', 'LVT01', 5, 0.33129999, 0, 0.33129999);
INSERT INTO produksi_gas VALUES (17, '2017-06-15', 'PMT01', 5, 0.457300007, 0, 0.457300007);
INSERT INTO produksi_gas VALUES (18, '2017-06-15', 'PMT02', 0, 0, 0, 0);
INSERT INTO produksi_gas VALUES (19, '2017-06-15', 'PMT03', 0, 0, 0, 0);
INSERT INTO produksi_gas VALUES (20, '2017-06-15', 'PRT01', 0, 0, 0, 0);
INSERT INTO produksi_gas VALUES (21, '2017-06-15', 'KRD01', 7, 1.76830006, 0, 1.76830006);
INSERT INTO produksi_gas VALUES (22, '2017-06-15', 'PDS01', 7, 1.93089998, 0, 1.93089998);
INSERT INTO produksi_gas VALUES (23, '2017-06-15', 'PDS02', 5, 0.680899978, 0, 0.680899978);
INSERT INTO produksi_gas VALUES (24, '2017-06-14', 'PDW03', 13, 5.53539991, 0, 5.53539991);
INSERT INTO produksi_gas VALUES (25, '2017-06-14', 'PDW04', 9, 2.81960011, 0, 2.81960011);
INSERT INTO produksi_gas VALUES (26, '2017-06-14', 'PDW05', 11, 4.15250015, 0, 4.15250015);
INSERT INTO produksi_gas VALUES (27, '2017-06-14', 'PDW06', 0, 0, 0, 0);
INSERT INTO produksi_gas VALUES (28, '2017-06-14', 'PDW07', 13, 6.91919994, 0, 6.91919994);
INSERT INTO produksi_gas VALUES (29, '2017-06-14', 'PDW08', 7, 2.32909989, 0, 2.32909989);
INSERT INTO produksi_gas VALUES (30, '2017-06-14', 'PMN04', 9, 2.19510007, 0, 2.19510007);
INSERT INTO produksi_gas VALUES (31, '2017-06-14', 'PMN05', 11, 3.85409999, 0, 3.85409999);
INSERT INTO produksi_gas VALUES (32, '2017-06-14', 'PMN06', 7, 1.17340004, 0, 1.17340004);
INSERT INTO produksi_gas VALUES (33, '2017-06-14', 'PMN09', 11, 2.74679995, 0, 2.74679995);
INSERT INTO produksi_gas VALUES (34, '2017-06-14', 'PMN10', 9, 3.29110003, 0, 3.29110003);
INSERT INTO produksi_gas VALUES (35, '2017-06-14', 'TSM01', 11, 2.93700004, 0, 2.93700004);
INSERT INTO produksi_gas VALUES (36, '2017-06-14', 'TSM03', 0, 0, 0, 0);
INSERT INTO produksi_gas VALUES (37, '2017-06-14', 'TSM04', 0, 0, 0, 0);
INSERT INTO produksi_gas VALUES (38, '2017-06-14', 'TSM06', 5, 1.10699999, 0, 1.10699999);
INSERT INTO produksi_gas VALUES (39, '2017-06-14', 'LVT01', 5, 0.32980001, 0, 0.32980001);
INSERT INTO produksi_gas VALUES (40, '2017-06-14', 'PMT01', 5, 0.455199987, 0, 0.455199987);
INSERT INTO produksi_gas VALUES (41, '2017-06-14', 'PMT02', 0, 0, 0, 0);
INSERT INTO produksi_gas VALUES (42, '2017-06-14', 'PMT03', 0, 0, 0, 0);
INSERT INTO produksi_gas VALUES (43, '2017-06-14', 'PRT01', 0, 0, 0, 0);


--
-- Data for Name: produksi_liquid; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO produksi_liquid VALUES (1, '2017-06-15', 'PDW03', 13, 74.2600021, 112.260002, 33.8499985);
INSERT INTO produksi_liquid VALUES (2, '2017-06-15', 'PDW04', 9, 40.5999985, 50.5200005, 18.6296005);
INSERT INTO produksi_liquid VALUES (3, '2017-06-15', 'PDW05', 11, 108.089996, 112.089996, 3.56999993);
INSERT INTO produksi_liquid VALUES (4, '2017-06-15', 'PDW06', 0, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (5, '2017-06-15', 'PDW07', 13, 62.0769997, 83.1399994, 25.3400002);
INSERT INTO produksi_liquid VALUES (6, '2017-06-15', 'PDW08', 7, 30.3719997, 31.9200001, 4.86000013);
INSERT INTO produksi_liquid VALUES (7, '2017-06-15', 'PMN04', 9, 42.6300011, 54.3400002, 21.5599995);
INSERT INTO produksi_liquid VALUES (8, '2017-06-15', 'PMN05', 11, 98.8499985, 105.910004, 6.67000008);
INSERT INTO produksi_liquid VALUES (9, '2017-06-15', 'PMN06', 7, 35.1300011, 47.2400017, 25.6299992);
INSERT INTO produksi_liquid VALUES (10, '2017-06-15', 'PMN09', 11, 81.6500015, 89.2600021, 8.52000046);
INSERT INTO produksi_liquid VALUES (11, '2017-06-15', 'PMN10', 9, 65.0800018, 79.5999985, 18.2399998);
INSERT INTO produksi_liquid VALUES (12, '2017-06-15', 'TSM01', 11, 109.610001, 119.449997, 8.23999977);
INSERT INTO produksi_liquid VALUES (13, '2017-06-15', 'TSM03', 0, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (14, '2017-06-15', 'TSM04', 0, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (15, '2017-06-15', 'TSM06', 5, 22.0799999, 50.7000008, 56.4500008);
INSERT INTO produksi_liquid VALUES (16, '2017-06-15', 'LVT01', 5, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (17, '2017-06-15', 'PMT01', 5, 6.5999999, 8.94999981, 26.2600002);
INSERT INTO produksi_liquid VALUES (18, '2017-06-15', 'PMT02', 0, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (19, '2017-06-15', 'PMT03', 0, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (20, '2017-06-15', 'PRT01', 0, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (21, '2017-06-15', 'KRD01', 7, 51.25, 60.3400002, 15.0600004);
INSERT INTO produksi_liquid VALUES (22, '2017-06-15', 'PDS01', 7, 29.5, 35.7799988, 17.5599995);
INSERT INTO produksi_liquid VALUES (23, '2017-06-15', 'PDS02', 5, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (24, '2017-06-14', 'PDW03', 13, 71.6100006, 108.879997, 33);
INSERT INTO produksi_liquid VALUES (25, '2017-06-14', 'PDW04', 9, 39.1500015, 48.0900002, 18.6000004);
INSERT INTO produksi_liquid VALUES (26, '2017-06-14', 'PDW05', 11, 104.230003, 106.709999, 2.31999993);
INSERT INTO produksi_liquid VALUES (27, '2017-06-14', 'PDW06', 0, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (28, '2017-06-14', 'PDW07', 13, 59.8600006, 79.1600037, 25.3700008);
INSERT INTO produksi_liquid VALUES (29, '2017-06-14', 'PDW08', 7, 29.2900009, 30.3899994, 3.63000011);
INSERT INTO produksi_liquid VALUES (30, '2017-06-14', 'PMN04', 9, 41.1100006, 51.7400017, 20.5499992);
INSERT INTO produksi_liquid VALUES (32, '2017-06-14', 'PMN06', 7, 33.8800011, 44.9700012, 24.6700001);
INSERT INTO produksi_liquid VALUES (31, '2017-06-14', 'PMN05', 11, 95.3300018, 100.830002, 5.46000004);
INSERT INTO produksi_liquid VALUES (33, '2017-06-14', 'PMN09', 11, 78.7399979, 84.9800034, 7.34000015);
INSERT INTO produksi_liquid VALUES (34, '2017-06-14', 'PMN10', 9, 62.75, 75.7799988, 17.1900005);
INSERT INTO produksi_liquid VALUES (35, '2017-06-14', 'TSM01', 11, 105.699997, 113.720001, 7.05999994);
INSERT INTO produksi_liquid VALUES (36, '2017-06-14', 'TSM03', 0, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (37, '2017-06-14', 'TSM04', 0, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (38, '2017-06-14', 'TSM06', 5, 21.2999992, 48.2700005, 55.8899994);
INSERT INTO produksi_liquid VALUES (39, '2017-06-14', 'LVT01', 5, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (40, '2017-06-14', 'PMT01', 5, 6.36000013, 8.52000046, 25.3099995);
INSERT INTO produksi_liquid VALUES (41, '2017-06-14', 'PMT02', 0, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (42, '2017-06-14', 'PMT03', 0, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (43, '2017-06-14', 'PRT01', 0, 0, 0, 0);
INSERT INTO produksi_liquid VALUES (44, '2017-06-14', 'KRD01', 7, 49.4199982, 57.4500008, 13.96);
INSERT INTO produksi_liquid VALUES (45, '2017-06-14', 'PDS01', 7, 28.4500008, 34.0699997, 16.5);
INSERT INTO produksi_liquid VALUES (46, '2017-06-14', 'PDS02', 5, 0, 0, 0);


--
-- Data for Name: submenu; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO submenu VALUES (2, 'Description', '0');
INSERT INTO submenu VALUES (1, 'Layers', '1');


--
-- Data for Name: tab; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO tab VALUES (2, 'produksi_gas', '0');
INSERT INTO tab VALUES (3, 'press_temp', '0');
INSERT INTO tab VALUES (4, 'sas', '0');
INSERT INTO tab VALUES (1, 'produksi_liquid', '1');


--
-- Data for Name: well; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO well VALUES ('KRD01', 'karangdewa', 'active');
INSERT INTO well VALUES ('LVT01', 'lavatera', 'active');
INSERT INTO well VALUES ('PDS01', 'pagardewa selatan', 'active');
INSERT INTO well VALUES ('PDS02', 'pagardewa selatan', 'active');
INSERT INTO well VALUES ('PDW03', 'pagardewa', 'active');
INSERT INTO well VALUES ('PDW04', 'pagardewa', 'active');
INSERT INTO well VALUES ('PDW05', 'pagardewa', 'active');
INSERT INTO well VALUES ('PDW06', 'pagardewa', 'active');
INSERT INTO well VALUES ('PDW07', 'pagardewa', 'active');
INSERT INTO well VALUES ('PDW08', 'pagardewa', 'active');
INSERT INTO well VALUES ('PMN04', 'prabumenang', 'active');
INSERT INTO well VALUES ('PMN05', 'prabumenang', 'active');
INSERT INTO well VALUES ('PMN06', 'prabumenang', 'active');
INSERT INTO well VALUES ('PMN09', 'prabumenang', 'active');
INSERT INTO well VALUES ('PMN10', 'prabumenang', 'active');
INSERT INTO well VALUES ('PMT02', 'pemaat', 'active');
INSERT INTO well VALUES ('PMT03', 'pemaat', 'active');
INSERT INTO well VALUES ('PMT04', 'pemaat', 'active');
INSERT INTO well VALUES ('TSM01', 'tasim', 'active');
INSERT INTO well VALUES ('PRT01', 'piretrium', 'active');
INSERT INTO well VALUES ('TSM03', 'tasim', 'active');
INSERT INTO well VALUES ('TSM04', 'tasim', 'active');
INSERT INTO well VALUES ('TSM06', 'tasim', 'active');


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
-- Name: pk_tab; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tab
    ADD CONSTRAINT pk_tab PRIMARY KEY (id);


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

--
-- PostgreSQL database cluster dump complete
--

