import { Grid } from "@mantine/core";
import { NomenclatureInstruction } from "./NomenclatureInstruction/NomenclatureInstruction";
import { NomenclaturePurport } from "./NomenclaturePurport/NomenclaturePurport";
import { NomenclatureContentWithPurport } from "./NomenclatureContentWithPurport/NomenclatureContentWithPurport";
import { useEffect, useRef, useState } from "react";
import { NomenclatureFeedback } from "./NomenclatureFeedback/NomenclatureFeedback";
import { Article } from "../../Article/Article";
import { NomenclatureContent } from "../NomenclatureContent/NomenclatureContent";
import { SupportModal } from "../../SupportModal/SupportModal";

export const NomenclatureMainBlock = ({ info, version }) => {
  const [value, setValue] = useState([]);
  const [active, setActive] = useState();
  const [isLiked, setIsLiked] = useState(false);
  const [isIOSLiked, setIsIOSLiked] = useState(false);
  const [isAndroidLiked, setIsAndroidLiked] = useState(false);
  const refs = useRef({});
  const [dataWithPurport, setDataWithPurport] = useState([]);
  const [data, setData] = useState([]);

  const [supportModal, setSupportModal] = useState(false);
  const openModal = () => {
    setSupportModal(true);
  };
  const closeModal = () => {
    setSupportModal(false);
  };
  const scrollToElement = (id) => {
    const element = refs.current?.[id];
    const viewportHeight = window.innerHeight;
    const elementTop = element.getBoundingClientRect().top + window.pageYOffset;
    const elementHeight = element.offsetHeight;
    const scrollToPosition =
      elementTop - viewportHeight / 2 + elementHeight / 2;
    window.scrollTo({
      top: scrollToPosition,
      behavior: "smooth",
    });
  };
  const decodeHTMLEntities = (text) => {
    const txt = document.createElement("textarea");
    txt.innerHTML = text;
    return txt.value;
  };
  const cleanHTML = (htmlString) => {
    const decodedHTML = decodeHTMLEntities(htmlString);
    const parser = new DOMParser();
    const doc = parser.parseFromString(decodedHTML, "text/html");
    const asideElements = doc.querySelectorAll("aside");
    asideElements.forEach((aside) => {
      const div = document.createElement("div");
      div.classList.add("custom-aside");
      while (aside.firstChild) {
        div.appendChild(aside.firstChild);
      }
      aside.replaceWith(div);
    });
    return doc.body.innerHTML;
  };
  const getData = () => {
    let htmlString;
    if (!active) {
      htmlString = info?.web_content;
    } else if (active === "iOS") {
      htmlString = info?.ios_content;
    } else if (active === "android") {
      htmlString = info?.android_content;
    }
    const cleanedHTML = cleanHTML(htmlString);
    const parser = new DOMParser();
    const doc = parser.parseFromString(cleanedHTML, "text/html");
    const preElements = Array.from(doc.querySelectorAll("pre"));
    const sections = [];
    preElements.forEach((pre, index) => {
      const title = pre.textContent.trim();
      let content = "";
      let nextNode = pre.nextSibling;
      while (nextNode && nextNode !== preElements[index + 1]) {
        if (nextNode.nodeType === Node.ELEMENT_NODE) {
          content += nextNode.outerHTML;
        } else if (nextNode.nodeType === Node.TEXT_NODE) {
          content += nextNode.textContent;
        }
        nextNode = nextNode.nextSibling;
      }
      sections.push({ title, content: content.trim() });
    });
    if (sections?.length < 1) {
      setData(cleanedHTML);
    } else {
      setDataWithPurport(sections);
    }
  };
  useEffect(() => {
    if (!version || version === "web") {
      setActive("");
    } else if (version === "iOS") {
      setActive("iOS");
    } else if (version === "android") {
      setActive("android");
    }
  }, []);
  useEffect(() => {
    getData();
  }, [active]);

  return (
    <>
      <div className="knowledge-container margin-left">
        <Grid className="nomenclature-main-block">
          <Grid.Col md={4} sm={12}>
            <NomenclatureInstruction
              info={info}
              active={active}
              setActive={setActive}
            />
            {(active === "iOS" || active === "android" || active === "") && (
              <>
                {dataWithPurport?.length > 0 && (
                  <NomenclaturePurport
                    data={dataWithPurport}
                    setValue={setValue}
                    scrollToElement={scrollToElement}
                  />
                )}
              </>
            )}
          </Grid.Col>
          <Grid.Col md={8} sm={12}>
            {dataWithPurport?.length > 0 ? (
              <NomenclatureContentWithPurport
                data={dataWithPurport}
                refs={refs}
                value={value}
                setValue={setValue}
              />
            ) : (
              <NomenclatureContent data={data} />
            )}
          </Grid.Col>
        </Grid>
      </div>
      {!isLiked && active === "" && (
        <NomenclatureFeedback
          active={active}
          setIsLiked={setIsLiked}
          openModal={openModal}
          info={info}
        />
      )}
      {!isIOSLiked && active === "iOS" && (
        <NomenclatureFeedback
          active={active}
          setIsLiked={setIsIOSLiked}
          openModal={openModal}
          info={info}
        />
      )}
      {!isAndroidLiked && active === "android" && (
        <NomenclatureFeedback
          active={active}
          setIsLiked={setIsAndroidLiked}
          openModal={openModal}
          info={info}
        />
      )}
      {supportModal && <SupportModal id={info?.id} closeModal={closeModal} />}
      <div className="bg-light">
        <Article />
      </div>
    </>
  );
};
