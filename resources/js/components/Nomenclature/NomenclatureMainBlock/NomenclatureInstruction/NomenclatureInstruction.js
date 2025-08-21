import { Flex, Text } from "@mantine/core";
import iconBlue from "../../../../../../public/img/knowledge-img//play-icon-blue.svg";
import iconWhite from "../../../../../../public/img/knowledge-img//play-icon-white.svg";
import { useEffect, useRef, useState } from "react";

export const NomenclatureInstruction = ({ info, active, setActive }) => {
  const previousPageRef = useRef(document.referrer);
  useEffect(() => {
    const handlePopState = () => {
      window.location.href = previousPageRef.current;
    };

    window.addEventListener("popstate", handlePopState);

    return () => {
      window.removeEventListener("popstate", handlePopState);
    };
  }, []);

  const handleVersionChange = (link) => {
    setActive(link);
    const currentUrl = window.location.pathname;
    const newUrl = `${currentUrl.split("/").slice(0, 3).join("/")}/${link}`;
    window.history.replaceState({ previous: currentUrl }, "", newUrl);
  };

  return (
    <>
      <Text className="nomenclature-instruction">Дастурҳо:</Text>
      <Flex w="100%" className="nomenclature-info-flex" gap="xs">
        {info?.web_content && (
          <Text
            className={`${
              active === ""
                ? "nomenclature-tag--active"
                : "nomenclature-tag--inactive"
            } nomenclature-tag`}
            onClick={() => handleVersionChange("")}
          >
            Web
          </Text>
        )}
        {info?.ios_content && (
          <Text
            className={`${
              active === "iOS"
                ? "nomenclature-tag--active"
                : "nomenclature-tag--inactive"
            } nomenclature-tag`}
            onClick={() => handleVersionChange("iOS")}
          >
            IOS
          </Text>
        )}
        {info?.android_content && (
          <Text
            className={`${
              active === "android"
                ? "nomenclature-tag--active"
                : "nomenclature-tag--inactive"
            } nomenclature-tag`}
            onClick={() => handleVersionChange("android")}
          >
            Android
          </Text>
        )}
        <Text
          className={`${
            active === "video"
              ? "nomenclature-tag--active"
              : "nomenclature-tag--inactive"
          } nomenclature-tag`}
          onClick={() => setActive("video")}
        >
          <img
            className="nomenclature-tag-icon nomenclature-tag-icon--active"
            src={active !== "video" ? iconBlue : iconWhite}
            alt="play icon"
          />
          Видео - дарс
        </Text>
        <Text
          className={`${
            active === "questions"
              ? "nomenclature-tag--active"
              : "nomenclature-tag--inactive"
          } nomenclature-tag`}
          onClick={() => setActive("questions")}
        >
          Саволҳои зуд-зуд додашаванда
        </Text>
      </Flex>
    </>
  );
};
