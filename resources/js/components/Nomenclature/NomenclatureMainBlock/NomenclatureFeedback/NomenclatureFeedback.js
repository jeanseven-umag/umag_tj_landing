import { Flex, Text } from "@mantine/core";
import axios from "axios";

export const NomenclatureFeedback = ({
  active,
  setIsLiked,
  info,
  openModal,
}) => {
  const sendLike = async (action) => {
    await axios
      .put(`/knowledge-base-popular/${info?.id}`, {
        action,
        version: active ? active?.toLowerCase() : "web",
      })
      .then(() => {
        setIsLiked(true);
      });
  };
  const getLikeCount = () => {
    if (active === "iOS") {
      return info?.like_count_ios || 0;
    } else if (active === "android") {
      return info?.like_count_android || 0;
    } else {
      return info?.like_count || 0;
    }
  };
  const getDislikeCount = () => {
    if (active === "iOS") {
      return info?.dislike_count_ios || 0;
    } else if (active === "android") {
      return info?.dislike_count_android || 0;
    } else {
      return info?.dislike_count || 0;
    }
  };
  return (
    <>
      <div className="bg-light-gray">
        <div className="knowledge-container">
          <Flex className="nomenclature-feedback-block" gap={50}>
            <Text className="nomenclature-feedback-caption">
              Была ли эта статья полезна?
            </Text>
            <Flex gap={20}>
              <Text
                onClick={() => sendLike("like")}
                className="nomenclature-feedback-text nomenclature-feedback-button"
              >
                Да ({getLikeCount()})
              </Text>
              <Text
                onClick={() => {
                  sendLike("dislike");
                  openModal();
                }}
                className="nomenclature-feedback-text nomenclature-feedback-button"
              >
                Нет ({getDislikeCount()})
              </Text>
            </Flex>
          </Flex>
        </div>
      </div>
    </>
  );
};
