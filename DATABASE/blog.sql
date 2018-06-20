--
-- PostgreSQL database dump
--

-- Dumped from database version 10.1
-- Dumped by pg_dump version 10.1

-- Started on 2018-06-20 20:40:16

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 2833 (class 1262 OID 24577)
-- Name: blog; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE blog WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Portuguese_Brazil.1252' LC_CTYPE = 'Portuguese_Brazil.1252';


ALTER DATABASE blog OWNER TO postgres;

\connect blog

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 1 (class 3079 OID 12924)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2835 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 199 (class 1259 OID 24638)
-- Name: authors; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE authors (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    created timestamp without time zone,
    modified timestamp without time zone
);


ALTER TABLE authors OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 24636)
-- Name: authors_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE authors_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE authors_id_seq OWNER TO postgres;

--
-- TOC entry 2836 (class 0 OID 0)
-- Dependencies: 198
-- Name: authors_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE authors_id_seq OWNED BY authors.id;


--
-- TOC entry 197 (class 1259 OID 24627)
-- Name: posts; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE posts (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    body character varying(255) NOT NULL,
    created timestamp without time zone,
    modified timestamp without time zone,
    author_id integer NOT NULL
);


ALTER TABLE posts OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 24625)
-- Name: posts_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE posts_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE posts_id_seq OWNER TO postgres;

--
-- TOC entry 2837 (class 0 OID 0)
-- Dependencies: 196
-- Name: posts_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE posts_id_seq OWNED BY posts.id;


--
-- TOC entry 202 (class 1259 OID 24686)
-- Name: posts_tags; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE posts_tags (
    post_id integer NOT NULL,
    tag_id integer NOT NULL
);


ALTER TABLE posts_tags OWNER TO postgres;

--
-- TOC entry 201 (class 1259 OID 24647)
-- Name: tags; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE tags (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    created timestamp without time zone,
    modified timestamp without time zone
);


ALTER TABLE tags OWNER TO postgres;

--
-- TOC entry 200 (class 1259 OID 24645)
-- Name: tags_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tags_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tags_id_seq OWNER TO postgres;

--
-- TOC entry 2838 (class 0 OID 0)
-- Dependencies: 200
-- Name: tags_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tags_id_seq OWNED BY tags.id;


--
-- TOC entry 2688 (class 2604 OID 24641)
-- Name: authors id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY authors ALTER COLUMN id SET DEFAULT nextval('authors_id_seq'::regclass);


--
-- TOC entry 2687 (class 2604 OID 24630)
-- Name: posts id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY posts ALTER COLUMN id SET DEFAULT nextval('posts_id_seq'::regclass);


--
-- TOC entry 2689 (class 2604 OID 24650)
-- Name: tags id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tags ALTER COLUMN id SET DEFAULT nextval('tags_id_seq'::regclass);


--
-- TOC entry 2825 (class 0 OID 24638)
-- Dependencies: 199
-- Data for Name: authors; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY authors (id, name, created, modified) FROM stdin;
5	Autor B	2018-06-20 21:31:58	2018-06-20 21:31:58
4	Autor A	2018-06-20 21:31:53	2018-06-20 21:31:53
7	Autor Z	2018-06-20 21:32:11	2018-06-20 21:32:11
6	Autor C	2018-06-20 21:32:04	2018-06-20 21:32:04
8	Autor J	2018-06-20 21:32:21	2018-06-20 23:09:16
\.


--
-- TOC entry 2823 (class 0 OID 24627)
-- Dependencies: 197
-- Data for Name: posts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY posts (id, title, body, created, modified, author_id) FROM stdin;
30	viverra nibh cras pulvinar mattis	Vestibulum ut nisl urna. Vivamus euismod metus ut molestie rhoncus. Nulla blandit tincidunt mi in ultricies. Nunc in facilisis purus. Quisque augue sapien, consequat eget mauris ut, fringilla commodo est. Aenean sit amet leo viverra, consequat erat ut, eg	2018-06-20 21:40:43	2018-06-20 21:40:43	8
32	arcu risus quis varius quam	Sed tellus diam, porta quis tellus nec, vulputate sagittis nisi. Vivamus et dui elit. Quisque quis neque a diam varius sagittis quis a libero. Suspendisse eget gravida mauris. In dignissim ipsum in odio aliquam, ut sagittis nunc eleifend. Vivamus sed maur	2018-06-20 21:41:29	2018-06-20 23:09:28	7
29	quis imperdiet massa tincidunt nunc	Nulla pulvinar tristique felis, ut suscipit nunc posuere sit amet. Nullam viverra erat id arcu lobortis, sit amet rutrum nisl vestibulum. Aenean lorem lacus, dapibus non consectetur nec, sagittis non leo. Nam viverra tellus nec nisl condimentum venenatis.	2018-06-20 21:40:27	2018-06-20 21:40:27	6
28	ac tortor vitae purus faucibus	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus purus leo, lobortis sit amet faucibus ut, convallis eu dui. Sed eu magna pellentesque, imperdiet dolor sed, pellentesque libero. Donec a ultrices nibh, non feugiat turpis. Sed in nisl tincid	2018-06-20 21:33:51	2018-06-20 21:42:49	5
31	in hendrerit gravida rutrum quisque	Sed nec ligula vitae nibh cursus ullamcorper vel sit amet metus. Nam pellentesque enim augue, a facilisis tortor suscipit et. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus tempor egestas lacus, et imperdiet elit rhoncus vel. Pellen	2018-06-20 21:41:00	2018-06-20 21:41:00	5
\.


--
-- TOC entry 2828 (class 0 OID 24686)
-- Dependencies: 202
-- Data for Name: posts_tags; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY posts_tags (post_id, tag_id) FROM stdin;
29	10
29	12
30	14
30	15
31	10
31	11
31	13
28	12
32	11
32	15
\.


--
-- TOC entry 2827 (class 0 OID 24647)
-- Dependencies: 201
-- Data for Name: tags; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tags (id, name, created, modified) FROM stdin;
11	Tecnologia	2018-06-20 21:35:31	2018-06-20 21:35:31
10	Curiosidades	2018-06-20 21:35:24	2018-06-20 21:35:24
13	Desktop	2018-06-20 21:36:28	2018-06-20 21:36:28
12	Mobile	2018-06-20 21:35:38	2018-06-20 21:35:38
15	Cultura	2018-06-20 21:37:02	2018-06-20 21:37:02
14	Digital	2018-06-20 21:36:37	2018-06-20 21:36:37
\.


--
-- TOC entry 2839 (class 0 OID 0)
-- Dependencies: 198
-- Name: authors_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('authors_id_seq', 8, true);


--
-- TOC entry 2840 (class 0 OID 0)
-- Dependencies: 196
-- Name: posts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('posts_id_seq', 33, true);


--
-- TOC entry 2841 (class 0 OID 0)
-- Dependencies: 200
-- Name: tags_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tags_id_seq', 15, true);


--
-- TOC entry 2693 (class 2606 OID 24643)
-- Name: authors authors_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY authors
    ADD CONSTRAINT authors_pkey PRIMARY KEY (id);


--
-- TOC entry 2697 (class 2606 OID 24690)
-- Name: posts_tags post_tag_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY posts_tags
    ADD CONSTRAINT post_tag_pkey PRIMARY KEY (post_id, tag_id);


--
-- TOC entry 2691 (class 2606 OID 24635)
-- Name: posts posts_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY posts
    ADD CONSTRAINT posts_pkey PRIMARY KEY (id);


--
-- TOC entry 2695 (class 2606 OID 24652)
-- Name: tags tags_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tags
    ADD CONSTRAINT tags_pkey PRIMARY KEY (id);


--
-- TOC entry 2698 (class 2606 OID 24658)
-- Name: posts fk_author_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY posts
    ADD CONSTRAINT fk_author_id FOREIGN KEY (author_id) REFERENCES authors(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2699 (class 2606 OID 24691)
-- Name: posts_tags posts_tags_post_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY posts_tags
    ADD CONSTRAINT posts_tags_post_id_fkey FOREIGN KEY (post_id) REFERENCES posts(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2700 (class 2606 OID 24696)
-- Name: posts_tags posts_tags_tag_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY posts_tags
    ADD CONSTRAINT posts_tags_tag_id_fkey FOREIGN KEY (tag_id) REFERENCES tags(id) ON UPDATE CASCADE;


-- Completed on 2018-06-20 20:40:16

--
-- PostgreSQL database dump complete
--

