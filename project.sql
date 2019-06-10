--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
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


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: admin; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.admin (
    name character varying(100),
    password character varying(100)
);


ALTER TABLE public.admin OWNER TO postgres;

--
-- Name: bill; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.bill (
    bid integer NOT NULL,
    pid character varying(100),
    phoneno numeric,
    cname character varying(100),
    price numeric
);


ALTER TABLE public.bill OWNER TO postgres;

--
-- Name: bill_bid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.bill_bid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bill_bid_seq OWNER TO postgres;

--
-- Name: bill_bid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.bill_bid_seq OWNED BY public.bill.bid;


--
-- Name: cart; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.cart (
    pid character varying(100),
    phoneno numeric,
    cname character varying(100),
    price numeric
);


ALTER TABLE public.cart OWNER TO postgres;

--
-- Name: customer; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.customer (
    name character varying(100),
    phoneno numeric NOT NULL,
    address character varying(100),
    password character varying(100)
);


ALTER TABLE public.customer OWNER TO postgres;

--
-- Name: products; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE public.products (
    pid character varying(50) NOT NULL,
    pname character varying(100),
    pdescription character varying(200),
    img character varying(100),
    price character varying(100)
);


ALTER TABLE public.products OWNER TO postgres;

--
-- Name: bid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.bill ALTER COLUMN bid SET DEFAULT nextval('public.bill_bid_seq'::regclass);


--
-- Data for Name: admin; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.admin (name, password) FROM stdin;
abc	123
\.


--
-- Data for Name: bill; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.bill (bid, pid, phoneno, cname, price) FROM stdin;
22	2	7507362965	canon_750d	900
23	2	7507362965	canon_750d	2700
26	3	7507362965	canon_eos_5d_mark_iv	12500
27	1	7507362965	canon_1500d	6000
29	1	7507362965	canon_1500d	8000
30	1	7507362965	canon_1500d	6000
31	6	7507362965	canon_ef_400mm_f_2_8	4000
\.


--
-- Name: bill_bid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.bill_bid_seq', 31, true);


--
-- Data for Name: cart; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.cart (pid, phoneno, cname, price) FROM stdin;
\.


--
-- Data for Name: customer; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.customer (name, phoneno, address, password) FROM stdin;
1	7507362965	Kothrud	123
\.


--
-- Data for Name: products; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.products (pid, pname, pdescription, img, price) FROM stdin;
1	canon_1500d	Dummy description about the camera	canon_1500d_18-55mm.jpg	2000
2	canon_750d	Dummy description about the camera	canon_750d.jpg	900
3	canon_eos_5d_mark_iv	Dummy	canon_eos_5d_mark_iv.jpg	2500
4	Canon_EOS_6D	This is dummy information	Canon_EOS_6D.jpg	1500
5	canon_eos_80d	This is dummy information	canon_eos_80d.jpg	2000
6	canon_ef_400mm_f_2_8	This is dummy information	canon_ef_400mm_f_2_8.jpg	1000
8	canon_eos_80d	This is dummy information	canon-eos-5d-mark-3.jpg	2500
\.


--
-- Name: bill_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.bill
    ADD CONSTRAINT bill_pkey PRIMARY KEY (bid);


--
-- Name: customer_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.customer
    ADD CONSTRAINT customer_pkey PRIMARY KEY (phoneno);


--
-- Name: products_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (pid);


--
-- Name: bill_phoneno_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.bill
    ADD CONSTRAINT bill_phoneno_fkey FOREIGN KEY (phoneno) REFERENCES public.customer(phoneno);


--
-- Name: bill_pid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.bill
    ADD CONSTRAINT bill_pid_fkey FOREIGN KEY (pid) REFERENCES public.products(pid);


--
-- Name: cart_phoneno_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cart
    ADD CONSTRAINT cart_phoneno_fkey FOREIGN KEY (phoneno) REFERENCES public.customer(phoneno);


--
-- Name: cart_pid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cart
    ADD CONSTRAINT cart_pid_fkey FOREIGN KEY (pid) REFERENCES public.products(pid);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

