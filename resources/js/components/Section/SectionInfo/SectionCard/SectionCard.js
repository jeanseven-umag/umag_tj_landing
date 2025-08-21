import { Card, Flex, Text } from "@mantine/core";
import { getStripText } from "../../../../utils/getStripText";

export const SectionCard = ({ handleClick, item }) => {
  const disabled = item.is_soon === 1 ? true : false;
  const click = () => {
    if (!disabled) {
      handleClick();
    }
  };
  return (
    <div className={`${disabled ? "main-card-soon" : ""}`}>
      <Card
        className="main-card section-card_height"
        radius="8px"
        onClick={() => click()}
      >
        <Flex
          className="section-card_height"
          direction="column"
          justify="space-between"
        >
          <Flex direction="column" mb={60}>
            <Flex>
              <Text className="main-tag">
                {!disabled ? item?.title : "Ба наздикӣ"}
              </Text>
            </Flex>
            <Text my={32} className="main-caption-text">
              {item?.title_second}
            </Text>
          </Flex>
          <Text className="main-text">
            <div
              dangerouslySetInnerHTML={{
                __html: getStripText(item.description, 120),
              }}
            />
          </Text>
        </Flex>
      </Card>
    </div>
  );
};
